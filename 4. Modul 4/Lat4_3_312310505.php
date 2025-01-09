<?php
//string that needs to be customized
$rawstring = "Welcome Birmingham parents. Your replaceme is a pleasure to have!";

//male string
$malestr = str_replace("replaceme", "son", $rawstring);

//female string
$femalestr = str_replace("replaceme", "daughter", $rawstring);

echo "Son: ". $malestr . "<br />";
echo "Daughter: ". $femalestr;
?>
