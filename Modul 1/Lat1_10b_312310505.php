<?php
function pangkat($x, $y) {
  // Jika pangkat adalah 0, maka hasilnya selalu 1
  if ($y == 0) {
    return 1;
  } else {
    // Hitung pangkat dengan perkalian berulang
    $hasil = 1;
    for ($i = 1; $i <= $y; $i++) {
      $hasil *= $x;
    }
    return $hasil;
  }
}

// Contoh penggunaan:
$hasil = pangkat(2, 3);
echo "2 pangkat 3 adalah: " . $hasil;
?>