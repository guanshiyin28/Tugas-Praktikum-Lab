<?php
session_start();

// Data produk disimpan dalam array
$produk = array(
    array("P001", "Kemeja", 150000, 10),
    array("P002", "Celana", 200000, 5),
    array("P003", "Sepatu", 500000, 7)
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    foreach ($produk as $item) {
        if ($item[0] == $product_id) {
            $product_name = $item[1];
            $product_price = $item[2];
            $product_stock = $item[3];

            if ($quantity > $product_stock) {
                $error_message = "Stok tidak mencukupi untuk produk $product_name. Stok tersedia: $product_stock.";
                break;
            }

            // Proses transaksi jika stok mencukupi
            $total_price = $product_price * $quantity;
            $discount = 0;

            // Logika penentuan diskon
            if ($total_price > 500000) {
                $discount = $total_price * 0.10;
            } elseif ($total_price > 250000) {
                $discount = $total_price * 0.05;
            }

            $tax = $total_price * 0.1;
            $total_price_after_tax = $total_price + $tax - $discount;

            $_SESSION["receipt"] = [
                "product_name" => $product_name,
                "quantity" => $quantity,
                "total_price" => $total_price,
                "discount" => $discount,
                "tax" => $tax,
                "total_price_after_tax" => $total_price_after_tax
            ];

            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Purchase</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <style>
        /* CSS untuk mengubah kursor */
        body {
            cursor: url('custom-cursor.png'), auto; /* Ganti 'custom-cursor.png' dengan URL gambar kursor Anda */
        }

        /* Penyesuaian kursor untuk elemen tertentu */
        .custom-cursor-element {
            cursor: url('another-cursor.png'), auto; /* Ganti 'another-cursor.png' dengan URL gambar kursor lain */
        }

        /* Styling lainnya */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
        }

        .receipt {
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .theme-toggle {
            position: fixed;
            bottom: 20px;
            left: 20px;
        }

        .theme-toggle button {
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
            margin-right: 5px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .theme-panel {
            position: fixed;
            bottom: 80px;
            left: -180px;
            width: 180px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: left 0.3s ease;
            z-index: 10;
        }

        .theme-panel.show {
            left: 20px;
        }

        .theme-panel button {
            width: 100%;
            margin: 0;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 0;
            background-color: #f8f9fa;
        }

        .toggle-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            background-color: #87CEEB;
            color: #ffffff;
            border-radius: 30px;
            z-index: 10;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .light-mode {
            background-color: #f8f9fa;
            color: #000;
        }

        .light-mode .container, .light-mode .receipt {
            background-color: #ffffff;
            color: #000;
            box-shadow: 0 0 10px #87CEEB;
        }

        .dark-mode {
            background-color: #343a40;
            color: #ffffff;
        }

        .dark-mode .container, .dark-mode .receipt {
            background-color: #495057;
            color: #ffffff;
            box-shadow: 0 0 10px #ff0000; /* warna merah */
        }

        .dark-mode .toggle-btn {
            background-color: #ff0000; /* warna merah */
            box-shadow: 0 0 10px #ff0000; /* warna merah */
        }

        .dark-mode .theme-panel button {
            background-color: #ff0000; /* warna merah */
            box-shadow: 0 0 10px #ff0000; /* warna merah */
            color: #ffffff;
        }

        .dark-mode .btn-submit {
            background-color: #ff0000; /* warna merah */
            box-shadow: 0 0 10px #ff0000; /* warna merah */
            border-color: #ff0000;
        }

        .light-mode .btn-submit {
            background-color: #87CEEB; /* warna biru awan */
            box-shadow: 0 0 10px #87CEEB; /* glow biru awan */
            border-color: #87CEEB;
        }

        .light-mode .theme-panel button {
            background-color: #87CEEB; /* warna biru awan */
            box-shadow: 0 0 10px #87CEEB; /* glow biru awan */
            color: #000;
        }

        /* Styling untuk scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #000000;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Media queries untuk responsifitas */
        @media (max-width: 600px) {
            .container, .receipt {
                width: 90%;
                padding: 15px;
                margin-bottom: 15px;
            }

            .title {
                font-size: 1.2em;
            }

            .theme-toggle button, .toggle-btn {
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body class="transition-colors duration-300">
    <div class="title">
        <h1>NIM: 312310505</h1>
        <h2>Nama: Muhammad Agisna Yudiansyah</h2>
    </div>
    <div class="container text-center">
        <h2 class="mb-4">Product Purchase</h2>
        <?php
        if (isset($error_message)) {
            echo "<p class='text-danger mb-4'>$error_message</p>";
        }
        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="product_id" class="font-weight-bold">Product ID:</label>
                <select id="product_id" name="product_id" required class="form-control">
                    <option value="" disabled selected>Pilih ID Produk</option>
                    <?php
                    foreach ($produk as $item) {
                        $selected = isset($_SESSION["product_id"]) && $_SESSION["product_id"] == $item[0] ? 'selected' : '';
                        echo "<option value='{$item[0]}' $selected>{$item[0]} - {$item[1]}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity" class="font-weight-bold">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="<?php echo isset($_SESSION["quantity"]) ? $_SESSION["quantity"] : ''; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-success btn-block btn-submit">
            </div>
        </form>
    </div>
    <?php
    if (isset($_SESSION["receipt"])) {
        $receipt = $_SESSION["receipt"];
        echo "
            <div class='receipt'>
                <h2 class='h4 mb-4'>STRUK TRANSAKSI</h2>
                <p>Nama Produk: " . $receipt["product_name"] . "</p>
                <p>Jumlah: " . $receipt["quantity"] . "</p>
                <p>Total Harga: Rp" . number_format($receipt["total_price"], 0, ",", ".") . "</p>
                <p>Diskon: Rp" . number_format($receipt["discount"], 0, ",", ".") . "</p>
                <p>Pajak: Rp" . number_format($receipt["tax"], 0, ",", ".") . "</p>
                <p>Total yang Harus Dibayar: Rp" . number_format($receipt["total_price_after_tax"], 0, ",", ".") . "</p>
            </div>
        ";
        unset($_SESSION["receipt"]);
    }
    ?>
    <button class="toggle-btn" onclick="toggleThemePanel()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
            <path d="M8 4.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7zM8 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 8 0zm4.5 7.5a.5.5 0 0 1 .5.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5v-.5zm-9 0a.5.5 0 0 1 .5.5v.5a.5.5 0 0 1-1 0v-.5a.5.5 0 0 1 .5-.5zm7.096-5.803a.5.5 0 0 1 .707 0l.707.707a.5.5 0 1 1-.707.707l-.707-.707a.5.5 0 0 1 0-.707zm-9.193 9.193a.5.5 0 0 1 .707 0l.707.707a.5.5 0 0 1-.707.707l-.707-.707a.5.5 0 0 1 0-.707zm10.606 0a.5.5 0 0 1 .707 0l.707.707a.5.5 0 0 1-.707.707l-.707-.707a.5.5 0 0 1 0-.707zm-9.193-9.193a.5.5 0 0 1 .707 0l.707.707a.5.5 0 1 1-.707.707l-.707-.707a.5.5 0 0 1 0-.707zM8 16a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z"/>
        </svg>
    </button>
    <div class="theme-panel">
        <button onclick="setTheme('light')">Light</button>
        <button onclick="setTheme('dark')">Dark</button>
        <button onclick="setTheme('system')">System</button>
    </div>
    <script>
        function setTheme(theme) {
            if (theme === 'system') {
                localStorage.removeItem('theme');
                applySystemTheme();
            } else {
                document.body.className = theme + "-mode";
                localStorage.setItem('theme', theme + "-mode");
            }
        }

        function applySystemTheme() {
            const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
            if (prefersDarkScheme) {
                document.body.className = 'dark-mode';
            } else {
                document.body.className = 'light-mode';
            }
        }

        function toggleThemePanel() {
            const panel = document.querySelector('.theme-panel');
            panel.classList.toggle('show');
        }

        (function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                document.body.className = savedTheme;
            } else {
                applySystemTheme();
            }

            // GSAP animations
            gsap.from(".container", {duration: 1, opacity: 0, y: -50});
            if (document.querySelector('.receipt')) {
                gsap.from(".receipt", {duration: 1, opacity: 0, y: 50});
            }
        })();
    </script>
</body>
</html>