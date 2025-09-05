<?php
require 'config.php';

$id = $_GET['idEditar'];

$script = "SELECT * FROM tb_sala WHERE id = $id";
$dadosResultao = $conn->query($script)->fetch();
?>

<div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Editar Sala</h1>
                <button type="button" class="btn-close" id="btnCloseModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./sala-editar.php" method="POST" id="form-editar-cadastro">
                    <input type="hidden" name="id" value="<?= $dadosResultao['id'] ?>"> 
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" class="fw-semibold my-auto">Identificacao:</label>
                        <input type="text" class="form-control" placeholder="Informe o nome da sala" name="txtIndentificacao" id="txtIndentificacao" value="<?= $dadosResultao['identificacao'] ?>">
                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" class="fw-semibold my-auto">Quant. de alunos:</label>
                        <input type="number" class="form-control" placeholder="Qual a quantidade de alunos suportados" name="txtQntdSuporteAlunos" id="txtQntdSuporteAlunos" value="<?= $dadosResultao['quant_suporte_alunos'] ?>">
                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" class="fw-semibold my-auto">Tipo de sala:</label>
                        <select id="tipo-sala" name="tipo-sala" class="form-select">
                            <option value="Convencional" <?php if($dadosResultao['tipo_sala']=="Convencional") { echo "selected"; } ?>>Convencional</option>
                            <option value="Laboratorio" <?php if($dadosResultao['tipo_sala']=="Laboratorio") { echo "selected"; } ?>>Laboratorio</option>
                            <option value="Laboratorio Hardware" <?php if($dadosResultao['tipo_sala']=="Laboratorio Hardware") { echo "selected"; } ?>>Laboratorio Hardware</option>
                            <option value="Laboratorio Enfermagem" <?php if($dadosResultao['tipo_sala']=="Laboratorio Enfermagem") { echo "selected"; } ?>>Laboratorio Enfermagem</option>
                            <option value="Atelie de moda" <?php if($dadosResultao['tipo_sala']=="Atelie de moda") { echo "selected"; } ?>>Atelie de moda</option>
                            <option value="Atelie de design" <?php if($dadosResultao['tipo_sala']=="Atelie de design") { echo "selected"; } ?>>Atelie de design</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnFecharModal">Fechar</button>
                <button type="submit" class="btn btn-warning" form="form-editar-cadastro">Editar</button>
            </div>
        </div>
    </div>
</div>

<script>

var modalEditar = new bootstrap.Modal(document.getElementById('modalEditar'));
modalEditar.show();

document.getElementById('btnCloseModal').addEventListener('click', function() {
    window.location.href = "../cad-sala.php";
});

document.getElementById('btnFecharModal').addEventListener('click', function() {
    window.location.href = "../cad-sala.php";
});
</script>
