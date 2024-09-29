<?php
  session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <h3 class="navbar-brand">Escola</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <?php if($atual == 'primeira'): ?>
                <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                <?php else: ?>
                <a class="nav-link" href="primeira.php">Cadastro</a>
                <?php endif; ?>
            </li>

            <li class="nav-item">
                <?php if($atual == 'mostra'): ?>
                <a class="nav-link" href="#" aria-disabled="true">Mostrar</a>
                <?php else: ?>
                <a class="nav-link" href="Mostra.php">Mostrar</a>
                <?php endif; ?>
            </li>

            <li class="nav-item">
                <?php if($atual == 'sair'): ?>
                <a class="nav-link disabled" aria-disable="true" href="#">Sair</a>
                <?php else: ?>
                <a class="nav-link" href="Sair.php">Sair</a>
                <?php endif; ?>
            </li>

        </ul>
        
        </div>
    </div>
    </nav>
    <?php
        if (!isset($_SESSION['aluno'])) {
            if($atual != 'primeira'){
                echo '<h2 class="nav-link">Sem Usuário Cadastrado!</h2> <br>';
                echo '<a class="nav-link" href="primeira.php">Primeira Página (Login)</a>';
            }else{
                
            }
        }
            
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>