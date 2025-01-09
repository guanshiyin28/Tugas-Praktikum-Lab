<?php
$someWords = "Please don't blow me to pieces.";

$wordChunks = explode(" ", $someWords);
for($i = 0; $i < count($wordChunks); $i++){
    echo "Piece $i = $wordChunks[$i] <br />";
}
?>
