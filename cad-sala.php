<?php
include './template/header.php';
include './template/modal-cadastro-sala.php';
include './template/modal-editar.php';
require './config.php';

$scriptListar = "SELECT * FROM tb_sala WHERE deletado = 0";

$resultadoLista = $conn->query($scriptListar)->fetchAll();

?>

<section class="container mt-5">
    <table class="table table-striped table-hover text-center">
        <div class="text-end mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCadastrar">
                <i class="bi bi-plus-circle"></i> Sala
            </button>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sala</th>
                <th scope="col">Tipo da sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultadoLista as $linha) { ?>
                <tr>
                    <th scope="row"><?= $linha['id'] ?></th>
                    <td><?= $linha['identificacao'] ?></td>
                    <td><?= $linha['tipo_sala'] ?></td>
                    <td>
                        <button
                            type="button"
                            class="btn btn-warning"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            data-identificacao="<?= $linha['identificacao'] ?>"
                            data-quant_alunos="<?= $linha['quant_suporte_alunos'] ?>"
                            data-tipo_sala="<?= $linha['tipo_sala'] ?>"
                            data-id="<?= $linha['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>

                        <a href="./sala-deletar.php?idDeletar=<?= $linha["id"] ?>" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>