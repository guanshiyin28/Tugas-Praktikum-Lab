<?php
session_start();

function factorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $factorial = factorial($number);

    echo "Number: " . $number . "<br>";
    echo "Factorial: " . $factorial . "<br>";

    $data = [
        'number' => $number,
        'factorial' => $factorial,
        'nim' => '312310505',
        'name' => 'Muhammad Agisna Yudiansyah'
    ];

    $_SESSION['data'] = $data;
}
?>

<a href="Lat3_3c_312310505.php">Go to next page</a>
