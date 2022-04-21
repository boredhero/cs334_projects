<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>Search Restaurants</title>
    </head>
    <?php
        include "menu.html";
    ?>
    <h2>Search For Restaurants By City and Price Range</h2>
    <body>
        <form method="post" action="">
            <label for="city">City:</label><br>
            <select id="city" name="city" required>
                <option value="Pittsburgh">Pittsburgh</option>
                <option value="Philadelphia">Philadelphia</option>
            </select><br>
            <label for="price_range">Price Range:</label><br>
            <select id="price_range" name="price_range" required>
                <option value="$">$</option>
                <option value="$$">$$</option>
                <option value="$$$">$$$</option>
                <option value="$$$$">$$$$</option>
            </select><br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["city"]) && isset($_POST["price_range"])){
        $city = $_POST["city"];
        $price_range = $_POST["price_range"];
        $query_search = "SELECT * FROM restaurants WHERE price_range LIKE '$price_range' AND city LIKE '$city'";
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
            echo "<table><tr><th>City</th><th>Hotel Name</th><th>Avg. Room Cost</th><th>Image</th>";
            for($i=0;$i<$rows;++$i){
                $row = $query_res->fetch_array(MYSQLI_NUM);
                echo "<tr>";
                for($y=0;$y<5;++$y){
                    if($y == 4){
                        $link = htmlspecialchars($row[$y]);
                        echo "<td><img src='$link', alt='Restaurant Image'></td>";
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