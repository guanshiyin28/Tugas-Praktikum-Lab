<?php
// Harga dasar per sikat
$brush_price = 5;

// Membuat tabel HTML
echo "<table border='1' align='center'>";
echo "<tr><th>Kuantitas</th><th>Harga</th></tr>";

// Looping menggunakan for dengan inkrementasi 5
for ($counter = 10; $counter <= 100; $counter += 5) {
    echo "<tr>";
    echo "<td>$counter</td>";
    echo "<td>" . ($brush_price * $counter) . "</td>";
    echo "</tr>";
}

// Looping menggunakan while
echo "</table><br>";
echo "<b>Menggunakan while:</b><br>";
echo "<table border='1' align='center'>";
echo "<tr><th>Kuantitas</th><th>Harga</th></tr>";

$counter = 10;
while ($counter <= 100) {
    echo "<tr>";
    echo "<td>$counter</td>";
    echo "<td>" . ($brush_price * $counter) . "</td>";
    echo "</tr>";
    $counter += 10;
}

// Looping menggunakan do-while
echo "</table><br>";
echo "<b>Menggunakan do-while:</b><br>";
echo "<table border='1' align='center'>";
echo "<tr><th>Kuantitas</th><th>Harga</th></tr>";

$counter = 10;
do {
    echo "<tr>";
    echo "<td>$counter</td>";
    echo "<td>" . ($brush_price * $counter) . "</td>";
    echo "</tr>";
    $counter += 10;
} while ($counter <= 100);

// Variasi: Menampilkan diskon jika kuantitas lebih dari 50
echo "</table><br>";
echo "<b>Dengan diskon:</b><br>";
echo "<table border='1' align='center'>";
echo "<tr><th>Kuantitas</th><th>Harga</th><th>Diskon</th><th>Total</th></tr>";

$counter = 10;
while ($counter <= 100) {
    $total = $brush_price * $counter;
    $discount = ($counter > 50) ? $total * 0.1 : 0; // Diskon 10% jika lebih dari 50
    $final_price = $total - $discount;

    echo "<tr>";
    echo "<td>$counter</td>";
    echo "<td>" . number_format($total, 2) . "</td>";
    echo "<td>" . number_format($discount, 2) . "</td>";
    echo "<td>" . number_format($final_price, 2) . "</td>";
    echo "</tr>";

    $counter += 10;
}

echo "</table>";
?>