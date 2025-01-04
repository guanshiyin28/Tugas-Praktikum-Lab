<?php
// Buatlah sebuah array untuk menyimpan data kendaraan, dengan isi data adalah sebagai berikut :
// - Mobil
// - Bus
// - Truk
// - Sepeda Motor
// - Sepeda
// - Becak
// - Andong

$kendaraan = array(
    "Mobil",
    "Bus",
    "Truk",
    "Sepeda Motor",
    "Sepeda",
    "Becak",
    "Andong"
);

// Tampilkan dengan menggunakan loop (perulangan), setelah itu terapkan fungsi-fungsi dibawahini:
// - sort()
// - asort()
// - ksort()
// - rsort()
// - arsort()
// - krsort()

// Menampilkan array kendaraan dengan loop
echo "<b>Array Kendaraan:</b><br>";
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan sort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan sort():</b><br>";
sort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan asort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan asort():</b><br>";
asort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan ksort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan ksort():</b><br>";
ksort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan rsort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan rsort():</b><br>";
rsort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan arsort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan arsort():</b><br>";
arsort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}

// Menampilkan array kendaraan setelah diurutkan dengan krsort()
echo "<br><b>Array Kendaraan setelah diurutkan dengan krsort():</b><br>";
krsort($kendaraan);
foreach ($kendaraan as $value) {
    echo $value . "<br>";
}
?>