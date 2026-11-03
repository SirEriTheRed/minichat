<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/PdoConnection.php';
require_once __DIR__ . '/DisplayComments.php';
require_once __DIR__ . '/CommentForm.php';
