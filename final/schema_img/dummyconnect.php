<?php
$server = "example.com";
$database = "database_name";
$username = "username";
$pword = "password";
$db_conn = new mysqli($server, $username, $pword, $database);
if($db_conn->connect_error){
    die("Fatal Err!");
}
?>