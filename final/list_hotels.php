<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>All Hotels</title>
    </head>
<?php
    include 'menu.html';
    require_once 'connectdb.php';
    $query_subscriber = "SELECT * FROM hotels";
    $subscriber_result = $db_conn->query($query_subscriber);
    if(!$subscriber_result){
        die("DB Read Failed!");
    }
    $s_rows = $subscriber_result->num_rows;
    echo "<br>";
    echo "<table><tr><th>City</th><th>Hotel Name</th><th>Avg. Room Cost Per Night</th><th>Image</th>";
    for($i=0;$i<$s_rows;++$i){
        $row = $subscriber_result->fetch_array(MYSQLI_NUM);
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
?>
</html>
