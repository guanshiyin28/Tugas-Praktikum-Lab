<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $entry = $name . ';' . $comment . "\n";
    $file = fopen('guestbook.txt', 'a') or die("can't open file");
    fwrite($file, $entry);
    fclose($file);
    header('Location: index.php');
    exit();
}
?>
