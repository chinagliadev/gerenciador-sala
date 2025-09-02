<?php

require './config.php';

//Criar duas contantes para termor controle e sem magic numbers
const RESERVA_DESATIVADA = 1;
const RESERVA_ATIVADA = 0;

$id = $_GET['id_deletar'];

//comando para atualizar a coluna delete para 1 (verdadeiro)
$script = "UPDATE tb_reserva_sala SET deletado = :deletado WHERE id = :id;";

//executar o comando delete
$resultado = $conn->prepare($script)->execute([
    'deletado' => RESERVA_DESATIVADA,
    ':id' => $id 
]);


//retornando para o index.php
header('location:index.php');