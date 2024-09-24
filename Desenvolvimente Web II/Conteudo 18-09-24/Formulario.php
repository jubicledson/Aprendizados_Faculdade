<?php
    include('Menu.php');
    $atual = 'formulario';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Formulário</title>
</head>
<body>
<div class="container-fluid">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">Cadastrar Aluno</h4><br>
            <form action="Recebe.php">
                <div class="mb-3 row align-items-start">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3 row align-items-start">
                    <label for="dtNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="dtNascimento">
                </div>
                <div class="mb-3 row align-items-start">
                    <label for="nota" class="form-label">Nota do Aluno</label>
                    <input type="text" class="form-control" name="nota">
                </div>
                <div class="mb-3 row align-items-start">
                    <label for="curso" class="form-label">Nome do Curso</label>
                    <input type="text" class="form-control" name="curso">
                </div>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sim">
                    Salvar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="sim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Salvo com sucesso!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Os dados foram salvo com sucesso!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Ir para os dados</button>
                            </div>
                        </div>
                    </div>
                </div>  
               
               
            </form>
        </div>
    </div>

</div>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>