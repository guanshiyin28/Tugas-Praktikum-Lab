<?php
// Mendefinisikan variabel $destination dengan nilai "Tokyo"
$destination = "Tokyo";

// Menampilkan pesan "Traveling to $destination"
echo "Traveling to $destination<br />";

// Memulai struktur kontrol switch untuk mengevaluasi nilai $destination
switch ($destination) {
    // Jika $destination bernilai "Las Vegas"
    case "Las Vegas":
        // Tampilkan pesan "Bring an extra $500"
        echo "Bring an extra $500";
        // Keluar dari struktur switch
        break;
    // Jika $destination bernilai "Amsterdam"
    case "Amsterdam":
        // Tampilkan pesan "Bring an open mind"
        echo "Bring an open mind";
        // Keluar dari struktur switch
        break;
    // ... (kasus lain untuk "Egypt", "Tokyo", dan "Caribbean Islands")
    // Jika tidak ada kasus yang cocok, maka tidak ada tindakan yang dilakukan
}
?>