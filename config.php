<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tanyakakek";

$con = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
    exit();
}
?>
