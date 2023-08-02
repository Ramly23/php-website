<?php

$name_host = "localhost";
$user_sql = "root";
$pass_sql = "";
$name_db = "foodhelpcentre";

$connectdb = mysqli_connect($name_host, $user_sql, $pass_sql, $name_db);

// Test If Is Connected
if(!$connectdb) {
    die("Connection Failed");
}
else {
    // echo "Connection Sucessful";
}