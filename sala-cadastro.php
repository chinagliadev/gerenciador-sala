<?php
require './config.php';

$identificacao = $_POST['txtIndentificacao'];
$quant_suporte_alunos = $_POST['txtQntdSuporteAlunos'];
$tipo_sala = $_POST['tipo-sala'];

$script = "INSERT INTO tb_sala (identificacao, quant_suporte_alunos, tipo_sala) 
            VALUES(:identificacao, :quant_suporte_alunos, :tipo_sala)"; 

$resultadoInserir = $conn->prepare($script)->execute([
    ":identificacao" => $identificacao,
    ":quant_suporte_alunos" => $quant_suporte_alunos,
    ":tipo_sala" => $tipo_sala,
]);


if($resultadoInserir){
    //retorno do ultimo id inserido no banco
    $ultimoId = $conn->lastInsertId();
    header("location:./cad-sala.php?lastId={$ultimoI}");
}


echo "<h1>tela cadastro</h1>";


?>