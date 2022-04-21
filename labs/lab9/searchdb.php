<html>
    <head>
        <link rel="stylesheet" href="blehv3.css">
        <title>Search Users</title>
    </head>
    <?php
        include "menu.html";
    ?>
    <h2>Search For User</h2>
    <body>
        <form method="post" action="">
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name"><br>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name"><br>
            <input type="submit", value="Submit">
        </form>
<?php
    require_once 'connectdb.php';
    if(isset($_POST["last_name"]) && isset($_POST["first_name"])){
        $last_name = $_POST["last_name"];
        $first_name = $_POST["first_name"];
        $query_search = "SELECT * FROM customer WHERE first_name LIKE '$first_name' OR last_name LIKE '$last_name'";
        $query_res = mysqli_query($db_conn, $query_search);
        if(!$query_res){
            die("Error Connecting to DB or no results found!");
        }
        $rows = $query_res->num_rows;
        if($rows == 0){
            echo "No results found.";
        }
        else{
            echo "<table><tr><th>Customer ID</th><th>Last Name</th><th>First Name</th><th>Address 1</th><th>Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Home Phone</th><th>Cell Phone</th><th>Facebook URL</th><th>Username</th><th>Password</th><th>Salesperson ID</th>";
            for($i=0;$i<$rows;++$i){
                $row = $query_res->fetch_array(MYSQLI_NUM);
                echo "<tr>";
                for($y=0;$y<16;++$y){
                    echo "<td>".htmlspecialchars($row[$y])."</td>";
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