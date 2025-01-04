<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan JavaScript</title>
</head>
<body>
    <h1>Hitung Luas Persegi</h1>
    <form id="formLuasPersegi">
        <label for="sisi">Masukkan panjang sisi:</label>
        <input type="number" id="sisi" name="sisi" required>
        <input type="submit" value="Hitung Luas">
    </form>
    <p id="hasil"></p>

    <!-- Menghubungkan file JavaScript -->
    <script src="script.js"></script>
</body>
</html>