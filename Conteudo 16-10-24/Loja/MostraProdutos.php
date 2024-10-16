<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <?php

        include '../ConexaoSql.php';

        $comandoSql = 'SELECT `nomeProduto`, `urlProduto`, `descricaoProduto`, `precoProduto` FROM `tblproduto`';

        $comando = $conn->prepare($comandoSql);

        $resultado = $comando->execute();

        if($resultado){
            while($linha = $comando->fetch()){
                echo '
                        <div class="card" style="width: 18rem;">
                            <img src="'.$linha['urlProduto'].'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">'.$linha['nomeProduto'].'</h4>
                                <p class="card-text">'.$linha['descricaoProduto'].'</p>
                                <p class="card-text">'.$linha['precoProduto'].'</p>
                            </div>
                        </div><br>';
            }
        }


    ?> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

