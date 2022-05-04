<?php 

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "db_aps";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>