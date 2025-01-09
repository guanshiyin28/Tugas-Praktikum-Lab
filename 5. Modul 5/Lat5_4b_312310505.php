<?php
// ganti mySQLUserName dengan username dari server mySQL Anda
// ganti mySQLPassWord dengan password dari server mySQL Anda

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
} else {
    die("Username atau password tidak diset");
}

$mysqli = new mysqli(
    'localhost',
    'root', // ganti dengan username MySQL Anda
    '', // ganti dengan password MySQL Anda
    'praktikumweb'
) or die ("Gagal melakukan koneksi");

$q = "CALL SP_Login ('".$username."','".$password."')";

$rs = $mysqli->query($q) or die ('Query gagal');

$row = $rs->fetch_object();

if ($row) {
    header("location:Lat5_1_312310505.php");
} else {
    echo "Data tidak terdaftar";
    header('Location: formLogin.php');
    exit(); // Tambahkan exit() setelah header untuk memastikan redirect
}
?>
