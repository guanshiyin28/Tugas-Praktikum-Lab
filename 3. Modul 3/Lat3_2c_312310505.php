<?php
session_start();
if (empty($_SESSION["nama"]))
echo "Maaf, anda belum memasukkan nama";
else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-
8"/>
<title>Hello, <?php echo $_SESSION["nama"] ?> </title>
</head>
<body>
Selamat datang <?php echo $_SESSION["nama"] ?>, <br />
Anda bisa masuk halaman ini karena anda telah menulis nama.
<form id="form1" name="form1" method="post" action="Lat3_2d_312310505.php">
<input type="submit" name="button" id="button" value="Keluar" />
</form>
</body>
</html>
<?php } ?>