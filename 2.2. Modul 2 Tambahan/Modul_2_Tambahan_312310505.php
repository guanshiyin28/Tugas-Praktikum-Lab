<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Gaji Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .pegawai {
            margin-bottom: 20px;
        }
        .pegawai h2 {
            margin-top: 0;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Gaji Pegawai</h1>
        <?php
        // Data pegawai
        $pegawai = [
            [
                'nama' => 'John Doe',
                'jabatan' => 'Manager',
                'gaji_pokok' => 8000000,
                'tunjangan' => 2000000
            ],
            [
                'nama' => 'Jane Smith',
                'jabatan' => 'Accountant',
                'gaji_pokok' => 7000000,
                'tunjangan' => 1500000
            ],
            [
                'nama' => 'Alice Johnson',
                'jabatan' => 'Clerk',
                'gaji_pokok' => 5000000,
                'tunjangan' => 1000000
            ],
            [
                'nama' => 'Bob Brown',
                'jabatan' => 'CEO',
                'gaji_pokok' => 10000000,
                'tunjangan' => 5000000
            ],
            [
                'nama' => 'Chris Green',
                'jabatan' => 'HR',
                'gaji_pokok' => 6000000,
                'tunjangan' => 2500000
            ]
        ];

        // Menghitung total gaji dan mencari gaji tertinggi
        $totalGajiPerusahaan = 0;
        $gajiTertinggi = 0;
        $pegawaiGajiTertinggi = '';

        foreach ($pegawai as $data) {
            $gajiTotal = $data['gaji_pokok'] + $data['tunjangan'];
            $totalGajiPerusahaan += $gajiTotal;

            if ($gajiTotal > $gajiTertinggi) {
                $gajiTertinggi = $gajiTotal;
                $pegawaiGajiTertinggi = $data['nama'];
            }

            // Mencetak laporan setiap pegawai
            echo "<div class='pegawai'>";
            echo "<h2>" . htmlspecialchars($data['nama']) . "</h2>";
            echo "<p>Jabatan: " . htmlspecialchars($data['jabatan']) . "</p>";
            echo "<p>Gaji Pokok: Rp " . number_format($data['gaji_pokok'], 0, ',', '.') . "</p>";
            echo "<p>Tunjangan: Rp " . number_format($data['tunjangan'], 0, ',', '.') . "</p>";
            echo "<p>Gaji Total: Rp " . number_format($gajiTotal, 0, ',', '.') . "</p>";
            echo "</div>";
            echo "<hr>";
        }

        // Mencetak total seluruh gaji yang dibayarkan perusahaan dan pegawai dengan gaji total tertinggi
        echo "<p class='total'>Total Seluruh Gaji yang Dibayarkan Perusahaan: Rp " . number_format($totalGajiPerusahaan, 0, ',', '.') . "</p>";
        echo "<p class='total'>Pegawai dengan Gaji Total Tertinggi: " . htmlspecialchars($pegawaiGajiTertinggi) . " (Rp " . number_format($gajiTertinggi, 0, ',', '.') . ")</p>";
        ?>
    </div>
</body>
</html>