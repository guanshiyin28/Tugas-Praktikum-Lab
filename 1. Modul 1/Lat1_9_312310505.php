<?php
// Fungsi untuk menjumlahkan dua angka
function mySum($numX, $numY) {
    // Menjumlahkan kedua angka dan menyimpan hasilnya dalam variabel $total
    $total = $numX + $numY;
    // Mengembalikan hasil penjumlahan
    return $total;
}

// Membuat variabel $myNumber dengan nilai awal 0
$myNumber = 0;

// Menampilkan nilai $myNumber sebelum fungsi dijalankan
echo "Sebelum fungsi dijalankan, myNumber = " . $myNumber . "<br>";

// Memanggil fungsi mySum() dengan argumen 3 dan 4, lalu menyimpan hasilnya ke dalam $myNumber
$myNumber = mySum(3, 4);

// Menampilkan nilai $myNumber setelah fungsi dijalankan
echo "Setelah fungsi dijalankan, myNumber = " . $myNumber . "<br>";
?>