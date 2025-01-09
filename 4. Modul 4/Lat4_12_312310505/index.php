<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <style>
        .chat-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            height: 300px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <h1>Chat Page</h1>
    <form id="chatForm" method="POST" action="process.php">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>
    <div class="chat-box" id="chatBox"></div>
        <?php include 'chat.txt'; ?>
    </div>
    <script>
        document.getElementById('chatForm').addEventListener('submit', function(event) {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;
            if (!name || !email || !message) {
                alert('Nama, email, dan pesan tidak boleh kosong');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
