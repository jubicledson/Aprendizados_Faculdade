
<?php
    include("Aluno.php");
    //ou
    //include 'Aluno.php';
    include("Menu.php");
    $atual = 'idade';
?>

<!DOCTYPE html>
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
    <div class="container-fluid ">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">Idade do aluno</h4><br>
                <?php
        
                    
                    //var_dump($_SESSION['aluno']);
                    $retornado = unserialize($_SESSION['aluno']);
                    //echo $retorno->nome;
                    
                    echo '<h5 class="card-title">Idade do aluno</h5><br>';
                    echo '<h5 class="card-title">'.$retornado->idade().'</h5><br>';

                ?>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>