<?php
function fibonacci($n) {
  // Jika n adalah 0 atau 1, maka nilai Fibonacci-nya adalah n itu sendiri
  if ($n <= 1) {
    return $n;
  } else {
    // Jika tidak, hitung nilai Fibonacci dengan rekursif
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

// Contoh penggunaan:
$hasil = fibonacci(10);
echo "Bilangan Fibonacci ke-10 adalah: " . $hasil;
?>