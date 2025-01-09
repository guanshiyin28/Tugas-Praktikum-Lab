<?php
session_start();

if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    echo "Number: " . $data['number'] . "<br>";
    echo "Factorial: " . $data['factorial'] . "<br>";
    echo "NIM: " . $data['nim'] . "<br>";
    echo "Name: " . $data['name'] . "<br>";

    // Clear session data
    session_unset();
    session_destroy();
} else {
    echo "No data found in session.";
}
?>
