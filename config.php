<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

