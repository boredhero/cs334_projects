<html>
    <head>
        <link rel="stylesheet" href="blehv4.css">
        <title>View Subscribers</title>
    </head>
<?php
    include 'menu.html';
    require_once 'connectdb.php';
    $query_subscriber = "SELECT * FROM subscriber";
    $subscriber_result = $db_conn->query($query_subscriber);
    if(!$subscriber_result){
        die("DB Read Failed!");
    }
    $s_rows = $subscriber_result->num_rows;
    echo "<br>";
    echo "<table><tr><th>Subscriber ID</th><th>Last Name</th><th>First Name</th><th>Email</th><th>Phone Number</th>";
    for($i=0;$i<$s_rows;++$i){
        $row = $subscriber_result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for($y=0;$y<5;++$y){
            echo "<td>".htmlspecialchars($row[$y])."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($db_conn);
?>
</html>
