<?php
require './config.php';

echo "<h1>ola</h1>";

$id = $_POST['txtId'];
$identificacao = $_POST['txtIdentificacao'];
$quant_suporte_alunos = $_POST['txtQuantAlunos'];
$tipo_sala = $_POST['tipo-sala-editar'];

$script = "UPDATE tb_sala 
           SET identificacao = :identificacao, 
               quant_suporte_alunos = :quant_suporte_alunos, 
               tipo_sala = :tipo_sala 
           WHERE id = :id";

$stmt = $conn->prepare($script);
$stmt->execute([
    ":identificacao" => $identificacao,
    ":quant_suporte_alunos" => $quant_suporte_alunos,
    ":tipo_sala" => $tipo_sala,
    ":id" => $id
]);

header('Location: ./cad-sala.php');
exit;
?>
