<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>
    <form action="save_guestbook.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
    <h2>Guestbook Entries</h2>
    <?php
    $filename = 'guestbook.txt';
    if (file_exists($filename)) {
        $file = fopen($filename, 'r');
        while (($line = fgets($file)) !== false) {
            $data = explode(';', $line);
            echo '<p><strong>' . htmlspecialchars($data[0]) . ':</strong> ' . htmlspecialchars($data[1]) . '</p>';
        }
        fclose($file);
    }
    ?>
</body>
</html>
