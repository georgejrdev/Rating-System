<?php


$dbHost = $_SERVER['DB_HOST'];
$dbUser = $_SERVER['DB_USER'];
$dbPass = $_SERVER['DB_PASS'];
$dbName = $_SERVER['DB_NAME'];

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao tentar conectar ao banco de dados: " . $e->getMessage();
}