<?php
// Inisialisasi variabel $x dengan nilai 4
$x = 4;

// Operasi penjumlahan dan pengisian kembali nilai ke variabel $x
$x += 3; // Sama dengan $x = $x + 3;

// Menampilkan hasil operasi
echo "Hasil dari operasi tersebut adalah = $x";

// Ganti operator "+=" dengan operator lain untuk melihat hasilnya

// Pengurangan
$x = 4;
$x -= 3;
echo "<br>Hasil pengurangan: $x";

// Perkalian
$x = 4;
$x *= 3;
echo "<br>Hasil perkalian: $x";

// Pembagian
$x = 4;
$x /= 2;
echo "<br>Hasil pembagian: $x";

// Modulus (sisa bagi)
$x = 5;
$x %= 2;
echo "<br>Hasil modulus: $x";

// Konkatinasi (menggabungkan string)
$x = "Hello";
$x .= " World";
echo "<br>Hasil konkatinasi: $x";
?>