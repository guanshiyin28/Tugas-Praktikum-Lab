<?php
//string that needs to be customized
$rawstring = "Welcome Birmingham parent! <br />
Your offspring is a pleasure to have!
We believe pronoun is learning a lot.<br />
The faculty simple adores pronoun2 and you
can often hear them say \"Attah sex!\"<br />";

//placeholders array
$placeholders = array('offspring', 'pronoun', 'pronoun2', 'sex');

//male replace values array
$malevals = array('son', 'he', 'him', 'boy');

//female replace values array
$femalevals = array('daughter', 'she', 'her', 'girl');

//male string
$malestr = str_replace($placeholders, $malevals, $rawstring);

//female string
$femalestr = str_replace($placeholders, $femalevals, $rawstring);

echo "Son: ". $malestr . "<br />";
echo "Daughter: ". $femalestr;
?>
