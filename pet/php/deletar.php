<?php
include "conexao.php";
header("Content-Type: application/json");

$id = $_POST['id'] ?? false;

$sql = "delete from animais where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$retorno = ['status' => 'ok'];
echo json_encode($retorno);