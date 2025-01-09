<?php
include "koneksi2.php";

$sql = "INSERT INTO user(username, password, level) VALUES (:userName, :passWord, :leVel)";
$statement = $pdo->prepare($sql);

// Insert first record
$statement->bindValue(':userName', 'Mada');
$statement->bindValue(':passWord', 'ahay');
$statement->bindValue(':leVel', '1');
$inserted = $statement->execute();

if ($inserted) {
    echo 'Data pertama berhasil ditambahkan!<br>';
}

// Insert second record
$statement->bindValue(':userName', 'Hendra');
$statement->bindValue(':passWord', 'yuhuu');
$statement->bindValue(':leVel', '2');
$inserted = $statement->execute();

if ($inserted) {
    echo 'Data kedua berhasil ditambahkan!<br>';
}
?>
