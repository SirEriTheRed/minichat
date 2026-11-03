<?php

$sql = "select * from comment";
$comments = $pdo->query($sql);

foreach ($comments as $comment) {
    echo '<strong>'
      . htmlspecialchars($comment['comment_user_name'], ENT_QUOTES, 'UTF-8')
      . '</strong>'
      . htmlspecialchars($comment['comment_text'], ENT_QUOTES, 'UTF-8');
}
