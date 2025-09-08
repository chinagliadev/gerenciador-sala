<div class="modal fade" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Cadastro Sala</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./sala-cadastro.php" method="POST" id="form-cadastrar-cadastro">
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">Identificacao:</label>
                        <input type="text" class="form-control" placeholder="Informe o nome da sala" name="txtIndentificacao" id="txtIndentificacao">
                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="qntd-aluno" class="fw-semibold my-auto">Quant. de alunos:</label>
                        <input type="number" class="form-control" placeholder="Qual a quantidade de alunos suportados"
                            name="txtQntdSuporteAlunos" id="txtQntdSuporteAlunos">
                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="tipo-sala" class="fw-semibold my-auto">Sala:</label>
                        <select id="tipo-sala" name="tipo-sala" class="form-select">
                            <option selected disabled>Selecione a Sala</option>
                            <option value="Convencional">Convencional</option>
                            <option value="Laboratorio">Laboratorio</option>
                            <option value="Laboratorio Hardware">Laboratorio Hardware</option>
                            <option value="Laboratorio Enfermagem">Laboratorio Enfermagem</option>
                            <option value="Atelie de moda">Atelie de moda</option>
                            <option value="Atelie de design">Atelie de design</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Fechar
                </button>
                <button type="submit" class="btn btn-primary" form="form-cadastrar-cadastro">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>