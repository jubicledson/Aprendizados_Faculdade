<?php
    
    $atual = 'primeira';
    include 'Menu.php';

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
            <form action="Recebe.php" method="get">
                <div class="mb-3 row align-items-start">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <input type="submit" value="salvar">
            </form>
        </div>
    </div>

</div>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>