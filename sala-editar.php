<?php
require './config.php';

$id = $_POST['id'];
$identificacao = $_POST['txtIndentificacao'];
$quant_suporte_alunos = $_POST['txtQntdSuporteAlunos'];
$tipo_sala = $_POST['tipo-sala'];

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
