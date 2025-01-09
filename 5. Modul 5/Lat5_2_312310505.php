<?php
include "koneksi.php";

if (empty($_GET['e']))
    $title = "Tambah User";
else {
    $e = $_GET['e'];
    $title = "Edit User";
    $q = mysqli_query(
        $conn,
        "SELECT *
        FROM user
        WHERE username='$_GET[username]'"
    );
    $data = mysqli_fetch_array($q);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title><?php echo $title ?></title>
</head>

<body>
    <h1><?php echo $title ?></h1>
    <form method="post" action="Lat5_3.php"></form>
        <input type="hidden" name="e" value="<?php if (isset($data)) echo $data['username'];?>"/>
        <table border="1">
            <tr>
                <td>Username</td>
                <td></td>
                    <input name="username" type="text" value="<?php if (isset($data['username'])) echo $data['username']; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td></td>
                    <input name="password" type="text" value="<?php if (isset($data)) echo $data['password'] ?>"/>
                </td>
            </tr>
            <tr>
                <td>Level</td>
                <td></td>
                    <input name="level" type="text" value="<?php if (isset($data)) echo $data['level'] ?>"/>
                </td>
            </tr>
            <tr></tr>
                <td colspan="2"><input type="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
