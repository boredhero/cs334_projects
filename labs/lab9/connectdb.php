<?php
$server = "sql107.epizy.com";
$database = "epiz_30981357_lab8";
$username = "epiz_30981357";
$pword = "grZBUUSEcco";
$db_conn = new mysqli($server, $username, $pword, $database);
if($db_conn->connect_error){
    die("Fatal Err!");
}
?>