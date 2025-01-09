<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Transformation</title>
</head>
<body>
    <form method="post" action="">
        <label for="inputText">Enter text:</label>
        <input type="text" id="inputText" name="inputText" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputText = $_POST["inputText"];
        $lowercase = strtolower($inputText);
        $uppercase = strtoupper($inputText);
        $capitalized = ucfirst(strtolower($inputText));

        echo "<p>Original Text: $inputText</p>";
        echo "<p>Lowercase: $lowercase</p>";
        echo "<p>Uppercase: $uppercase</p>";
        echo "<p>Capitalized: $capitalized</p>";
    }
    ?>
</body>
</html>
