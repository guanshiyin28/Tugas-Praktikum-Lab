<?php
function sensorWords($text) {
    $wordsToSensor = ['ADAM'];
    foreach ($wordsToSensor as $word) {
        $text = str_replace($word, $word[0] . str_repeat('*', strlen($word) - 2) . $word[-1], $text);
    }
    return $text;
}

function replaceSmiley($text) {
    $smileys = [
        ':)' => '<img src="smiley.png" alt=":)" />'
    ];
    return str_replace(array_keys($smileys), array_values($smileys), $text);
}

function convertEmailToLink($text) {
    return preg_replace('/[a-z0-9_\.-]+@[a-z0-9_\.-]+\.[a-z\.]{2,7}/i', '<a href="mailto:$0">$0</a>', $text);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $message = sensorWords($message);
        $message = replaceSmiley($message);
        $message = convertEmailToLink($message);

        $chatMessage = "<p><strong>$name</strong> ($email): $message</p>\n";
        file_put_contents('chat.txt', $chatMessage, FILE_APPEND);
    }
}

header('Location: index.php');
exit();
?>
