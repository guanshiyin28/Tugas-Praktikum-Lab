<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
?>

<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);
?>

<form enctype="multipart/form-data" action="Lat4_11_upload_312310505.php"
method="POST">
Choose a file to upload:
<input name="uploadedfile" type="file" /> <br />
<input type="submit" value="Upload File" />
</form>
?>
