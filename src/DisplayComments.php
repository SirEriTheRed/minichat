<?php

$sql = "select * from comment";
$comments = $pdo->query($sql);

foreach ($comments as $comment) {
    echo "<strong>{$comment['comment_user_name']} :</strong> {$comment['comment_text']}";
}
