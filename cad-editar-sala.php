<?php
include './template/header.php';
require './config.php';

$id = $_GET['idEditar'];

$script = "SELECT * FROM tb_sala WHERE id = $id";
$dados = $conn->query($script)->fetch();

?>

<section class="container mt-5 d-flex justify-content-center">
    <div class="w-100 bg-white p-4 rounded shadow" style="max-width: 500px;">
        <h1 class="display-6 text-center mb-4">Editar Sala</h1>
        <form action="./sala-editar.php" method="POST">
            <input type="hidden" id="txtId" name="txtId" value="<?= $dados['id'] ?>">
            <div class="mb-3">
                <label for="txtIdentificacao" class="form-label">Identificação</label>
                <input type="text" class="form-control" id="txtIdentificacao" name="txtIdentificacao" required value="<?= $dados['identificacao'] ?>">
            </div>
            <div class="mb-3">
                <label for="txtQuantAlunos" class="form-label">Quant. Alunos</label>
                <input type="number" class="form-control" id="txtQuantAlunos" name="txtQuantAlunos" required value="<?= $dados['quant_suporte_alunos'] ?>">
            </div>
            <div class="mb-3">
                <label for="tipo-sala-editar" class="form-label">Sala</label>
                <select id="tipo-sala-editar" name="tipo-sala-editar" class="form-select" required>
                    <option disabled <?= $dados['tipo_sala'] == '' ? 'selected' : '' ?>>Selecione a Sala</option>
                    <option value="Convencional" <?php if ($dados['tipo_sala'] == 'Convencional') echo 'selected'; ?>>Convencional</option>
                    <option value="Laboratorio" <?php if ($dados['tipo_sala'] == 'Laboratorio') echo 'selected'; ?>>Laboratório</option>
                    <option value="Laboratorio Hardware" <?php if ($dados['tipo_sala'] == 'Laboratorio Hardware') echo 'selected'; ?>>Laboratório Hardware</option>
                    <option value="Laboratorio Enfermagem" <?php if ($dados['tipo_sala'] == 'Laboratorio Enfermagem') echo 'selected'; ?>>Laboratório Enfermagem</option>
                    <option value="Atelie de moda" <?php if ($dados['tipo_sala'] == 'Atelie de moda') echo 'selected'; ?>>Ateliê de Moda</option>
                    <option value="Atelie de design" <?php if ($dados['tipo_sala'] == 'Atelie de design') echo 'selected'; ?>>Ateliê de Design</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
</section>