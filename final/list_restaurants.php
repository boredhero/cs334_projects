<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>All Restaurants</title>
    </head>
<?php
    include 'menu.html';
    require_once 'connectdb.php';
    $query_subscriber = "SELECT * FROM restaurants";
    $subscriber_result = $db_conn->query($query_subscriber);
    if(!$subscriber_result){
        die("DB Read Failed!");
    }
    $s_rows = $subscriber_result->num_rows;
    echo "<br>";
    echo "<table><tr><th>City</th><th>Restaurant Name</th><th>Cuisine Type</th><th>Price Range</th><th>Image</th>";
    for($i=0;$i<$s_rows;++$i){
        $row = $subscriber_result->fetch_array(MYSQLI_NUM);
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
?>
</html>
