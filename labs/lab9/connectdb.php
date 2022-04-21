<?php
$server = "";
$database = "";
$username = "";
$pword = "";
$db_conn = new mysqli($server, $username, $pword, $database);
if($db_conn->connect_error){
    die("Fatal Err!");
}
?>
