<?php

$host = 'localhost';
$db = 'praktikumweb';
$user = 'root'; // ganti yourActualUsername dengan username dari server MySQL Anda
$pass = ''; // ganti yourActualPassword dengan password dari server MySQL Anda
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

?>
