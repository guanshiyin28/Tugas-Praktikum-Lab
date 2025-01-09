<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "labkom");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: Lat3_6a_312310505.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }
    $stmt->close();
}
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<form method="POST" action="">
    <p>Username: <input type="text" name="username" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <input type="submit" value="Login" />
</form>
<p>Don't have an account? <a href="register.php">Register here</a></p>
<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
</body>
</html>
