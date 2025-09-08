<?php
require './config.php';


?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Editar aluno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="./sala-editar.php" id="form-editar-cadastro">
                    <input type="hidden" id="txtId" name="txtId">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Sala:</label>
                        <input type="text" class="form-control" id="txtIdentificacao" name="txtIdentificacao">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Quant Alunos:</label>
                        <input type="text" class="form-control" id="txtQtdAlunos" name="txtQtdAlunos">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tipo da sala:</label>
                        <select id="txtTipoSala" name="txtTipoSala" class="form-select" required>
                            <option disabled selected>Selecione a Sala</option>
                            <option value="Convencional">Convencional</option>
                            <option value="Laboratorio">Laboratório</option>
                            <option value="Laboratorio Hardware">Laboratório Hardware</option>
                            <option value="Laboratorio Enfermagem">Laboratório Enfermagem</option>
                            <option value="Atelie de moda">Ateliê de Moda</option>
                            <option value="Atelie de design">Ateliê de Design</option>
                        </select>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning" form="form-editar-cadastro">Editar</button>
            </div>
        </div>
    </div>
</div>

<script>
    const exampleModal = document.getElementById('exampleModal')
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget

            const identificacao = button.getAttribute('data-identificacao')
            const qtd_alunos = button.getAttribute('data-quant_alunos')
            const tipo_sala = button.getAttribute('data-tipo_sala')
            const id = button.getAttribute('data-id')


            const inputIdentificacao = exampleModal.querySelector('.modal-body #txtIdentificacao')
            const inputQtdAlunos = exampleModal.querySelector('.modal-body #txtQtdAlunos')
            const inputTipoSala = exampleModal.querySelector('.modal-body #txtTipoSala')
            const inputId = exampleModal.querySelector('.modal-body #txtId')

            inputIdentificacao.value = identificacao
            inputQtdAlunos.value = qtd_alunos
            inputTipoSala.value = tipo_sala
            inputId.value = id
        })
    }
</script>