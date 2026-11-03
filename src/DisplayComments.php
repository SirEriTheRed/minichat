<?php

$commentsNumber = 5;

$sql = "select * from comment order by comment_published_date desc limit :commentsNumber";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':commentsNumber', $commentsNumber);
$stmt->execute();
$comments = $stmt->fetchAll();

foreach ($comments as $comment) {
    echo '<div class="comment"> <strong>'
      . htmlspecialchars($comment['comment_user_name'], ENT_QUOTES, 'UTF-8')
      . ' at '
      . htmlspecialchars($comment['comment_published_date'], ENT_QUOTES, 'UTF-8')
      . ' :</strong>'
      . htmlspecialchars($comment['comment_text'], ENT_QUOTES, 'UTF-8')
      . '</div>';
}
