<html>
    <head>
        <link rel="stylesheet" href="blehv3.css">
        <title>View Database</title>
    </head>
<?php
    include 'menu.html';
    require_once 'connectdb.php';
    $query_customer = "SELECT * FROM customer";
    $customer_result = $db_conn->query($query_customer);
    if(!$customer_result){
        die("DB Read Failed!");
    }
    $c_rows = $customer_result->num_rows;
    echo "<br>";
    echo "<table><tr><th>Customer ID</th><th>Last Name</th><th>First Name</th><th>Address 1</th><th>Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Home Phone</th><th>Cell Phone</th><th>Facebook URL</th><th>Username</th><th>Password</th><th>Salesperson ID</th>";
    for($i=0;$i<$c_rows;++$i){
        $row = $customer_result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for($y=0;$y<16;++$y){
            echo "<td>".htmlspecialchars($row[$y])."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($db_conn);
?>
</html>