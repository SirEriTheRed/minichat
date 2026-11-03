<?php

require_once __DIR__ . '/PdoConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = trim($_POST['userName'] ?? '');
    $commentText = trim($_POST['commentText'] ?? '');

    if ($userName === '' || strlen($userName) > 64) {
        http_response_code(400);
        exit('Invalid user name');
    }

    if ($commentText === '' || strlen($commentText) > 255) {
        http_response_code(400);
        exit('Invalid comment text');
    }

    $sql = "insert into comment (comment_user_name, comment_text) values (:userName, :commentText)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':commentText', $commentText);

    if (!$stmt->execute()) {
        echo 'There was an error while sending the messsage.';
        exit;
    }
    header('Location: index.php');
    exit;
}
exit;
