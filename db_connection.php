<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "chrome_voters_db";

$connection = mysqli_connect($host,$user,$pass,$db_name);
//Check if the connection failed
if (!isset($connection)){
    die("DB connection failed!!!");
}
