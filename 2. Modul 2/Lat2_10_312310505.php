<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guan</title>
</head>
<body>
    <form action="proses02.php" method="POST" name="input" id="inputForm">
        Nama Anda <input type="text" name="nama" id="nama" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        // Menambahkan event listener untuk form submit
        document.getElementById('inputForm').addEventListener('submit', function(event) {
            // Mengambil nilai input nama
            let nama = document.getElementById('nama').value;

            // Memvalidasi apakah input nama tidak kosong
            if (nama.trim() === "") {
                alert("Nama tidak boleh kosong!");
                event.preventDefault(); // Mencegah form dari pengiriman
            }
        });
    </script>
</body>
</html>