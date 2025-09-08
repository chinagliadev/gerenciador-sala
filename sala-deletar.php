<?php

require './config.php';

$id = $_GET['idDeletar'];
var_dump($id);

const DELETEATIVADO = 0;
const DELETEDESATIVADO = 1;

$script = "UPDATE tb_sala SET deletado = :desativado WHERE id = :id";

$resultadoDeletar = $conn->prepare($script)->execute([
    ':desativado' => DELETEDESATIVADO,
    ':id' => $id
]);

header('location:./cad-sala.php')

?>