<?php

$dbtype = 'mysql';
$host = 'mysql-etu.unicaen.fr';
$port = '3306';
$dbname = 'borde251_dev';
$username = 'borde251';
$password = 'mdp';
$dsn = "$dbtype:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion successful !";
} catch (PDOException $exception) {
    echo "An exception happened while trying to connect to the database: " . $exception->getMessage();
}
