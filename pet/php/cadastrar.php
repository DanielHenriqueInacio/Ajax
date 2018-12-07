<?php

include "conexao.php";
header("Content-Type: application/json");

$nome = $_POST['nome'];
$raca = $_POST['raca'];
$dono = $_POST['dono'];
$data_nascimento = $_POST['data_nascimento'];
$data_nascimento = implode("/", array_reverse(explode("-", $data_nascimento)));

$sql = "insert into animais (nome, raca, dono, data_nascimento) values(:nome, :raca, :dono, :data_nascimento)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":raca", $raca);
$stmt->bindParam(":dono", $dono);
$stmt->bindParam(":data_nascimento", $data_nascimento);

$x = $stmt->execute();

$retorno = [
    'id' => $conn->lastInsertId(), 
    "nome" => $nome,
    "raca" => $raca,
    "dono" => $dono,
    "data_nascimento" => $data_nascimento,
    "status" => "ok"
];

echo json_encode($retorno);