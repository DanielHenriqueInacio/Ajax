<?php

include "conexao.php";
header("Content-Type: application/json");

$sql = "select * from animais";

$rs = $conn->query($sql);
$retorno = [];
while($row = $rs->fetch(PDO::FETCH_OBJ)){	
  $retorno[] = $row;
}

echo json_encode($retorno);