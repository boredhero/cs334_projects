<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>Search Hotels</title>
    </head>
    <?php
        include "menu.html";
    ?>
    <h2>Search For Hotels By City and Price</h2>
    <body>
        <form method="post" action="">
            <label for="city">City:</label><br>
            <select id="city" name="city" required>
                <option value="Pittsburgh">Pittsburgh</option>
                <option value="Philadelphia">Philadelphia</option>
            </select><br>
            <label for="price_range">Price Range:</label><br>
            <select id="price_range" name="price_range" required>
                <option value=1>Less than $100/night</option>
                <option value=2>$100/night to $200/night</option>
                <option value=3>$More than$200/night</option>
            </select><br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["city"]) && isset($_POST["price_range"])){
        $city = $_POST["city"];
        $price_range = $_POST["price_range"];
        if($price_range == 1){
            $query_search = "SELECT * FROM hotels WHERE avg_room_cost_per_night < 100 AND city LIKE '$city'";
        }
        if($price_range == 2){
            $query_search = "SELECT * FROM hotels WHERE avg_room_cost_per_night > 100 AND avg_room_cost_per_night < 200 AND city LIKE '$city'";
        }
        if($price_range == 3){
            $query_search = "SELECT * FROM hotels WHERE avg_room_cost_per_night > 200 AND city LIKE '$city'";
        }
        $query_res = mysqli_query($db_conn, $query_search);
        if(!$query_res){
            $err = mysqli_error($db_conn);
            die("Error Connecting to DB or no results found! $err");
        }
        $rows = $query_res->num_rows;
        if($rows == 0){
            echo "No results found.";
        }
        else{
            echo "<table><tr><th>City</th><th>Hotel Name</th><th>Avg. Room Cost Per Night</th><th>Image</th>";
            for($i=0;$i<$rows;++$i){
                $row = $query_res->fetch_array(MYSQLI_NUM);
                echo "<tr>";
                for($y=0;$y<4;++$y){
                    if($y == 3){
                        $link = htmlspecialchars($row[$y]);
                        echo "<td><img src='$link', alt='Hotel Image'></td>";
                    }
                    else{
                        echo "<td>".htmlspecialchars($row[$y])."</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($db_conn);
        }
    }
    mysqli_close($db_conn);
?>
    </body>
</html>