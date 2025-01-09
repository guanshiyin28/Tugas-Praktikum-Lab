
<?php
include "koneksi.php";
$q = mysqli_query($conn, "SELECT * FROM user");
echo "<form action=\"Lat5_2.php\" method=\"POST\">
<input type=\"submit\" value=\"tambah user\" />
</form>";
echo "<table border=\"1\">
<th>Username</th>
<th>Password</th>
<th>level</th>
<th>aksi</th>";
while ($hasil = mysqli_fetch_array($q))
    echo "<tr>
    <td>$hasil[username]</td>
    <td>$hasil[password]</td>
    <td>$hasil[level]</td>
    <td>
    <a href=\"Lat5_2.php?username=$hasil[username]&e=1\">
    Edit
    </a>
    </td>
    </tr>";
echo "</table>";
?>