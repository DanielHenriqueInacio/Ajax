<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=pet", "developer", "dev123");
    $conn->exec("set names utf8");
} catch(PDOException $e) {
    echo "Erro ao conectar com o MySQL: " . $e->getMessage();
    exit;
}