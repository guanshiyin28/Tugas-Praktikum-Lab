
<?php
$namahost = "localhost";
$username = "root";
$password = ""; //password MySQLi anda
$database = "praktikumweb"; //database anda
$conn = mysqli_connect(
    $namahost,
    $username,
    $password,
    $database
) or die("Failed");
?>