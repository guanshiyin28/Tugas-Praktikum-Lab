<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "labkom");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
<title>Register</title>
</head>
<body>
<form method="POST" action="">
    <p>Username: <input type="text" name="username" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <input type="submit" value="Register" />
</form>
</body>
</html>
