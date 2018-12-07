<?php
include "conexao.php";
header("Content-Type: application/json");

$id = $_GET['id'] ?? false;

$sql = "select * from animais where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$retorno = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode($retorno);
