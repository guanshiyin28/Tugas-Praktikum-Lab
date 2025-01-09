<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<html>
<head>
<title>Order Form</title>
</head>
<body>
<?php
$cd_order = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0;
$dvd_order = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0;
?>
<form action="Lat3_6b_312310505.php" method="POST">
<p> Order CD, amount :
    <input type="text" name="cd_order" value="<?php echo $cd_order; ?>" size="2"
        maxlength="2" />
</p>
<p> Order DVD, amount :
    <input type="text" name="dvd_order" value="<?php echo $dvd_order; ?>" size="2"
    maxlength="2" />
</p>
<input type="submit" value="Add To Cart" name="submit" />
</form>
</body>
</html>