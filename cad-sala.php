<?php
include './template/header.php'
?>

<section class="container mt-5">
    <table class="table table-striped table-hover text-center">
        <div class="text-end">
            <a href="#" class="btn btn-success px-3"><i class="bi bi-plus-circle"></i> Sala</a>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Sala</td>
                <td>
                    <a href="#" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</section>