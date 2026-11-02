<?php

$env = parse_ini_file(__DIR__ . '/../.env');
$dsn = "$env['DB_TYPE']:host={$env['DB_HOST']};port={$env['DB_PORT']};dbname={$env['DB_NAME']};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $env['DB_USER'], $env['DB_PASS']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $exception) {
    echo "An exception happened while trying to connect to the database: " . $exception->getMessage();
}
