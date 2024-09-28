<?php
    
    session_start();
    if(isset($atual) == false){
        $atual = '';
    }
    
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
            <?php if($atual == 'formulario'): ?>
                <li class="nav-item">
                <a class="nav-link active " aria-current="page" aria-disabled="true" aira-disable href="#">Cadastrar</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Formulario.php">Cadastrar</a>
                </li>
            <?php endif; ?>

            <?php if($atual == 'mostra'): ?>
                <li class="nav-item">
                <a class="nav-link" href="#" aria-disabled="true">Mostrar</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="Mostra.php">Mostrar</a>
                </li>
            <?php endif; ?>

            <?php if($atual == 'idade'): ?>
                <li class="nav-item">
                <a class="nav-link" aria-disable="true" href="#">Idade</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="MostraIdade.php">Idade</a>
                </li>
            <?php endif; ?>

            <?php if($atual == 'sair'): ?>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disable="true" href="#">Sair</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="Sair.php">Sair</a>
                </li>
            <?php endif; ?>
        </ul>
        
        </div>
    </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>