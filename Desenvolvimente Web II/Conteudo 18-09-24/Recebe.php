

<?php
    include('Aluno.php');
    include('Menu.php');
    /*
    $nome = $_GET['nome'];
    $dtNascimento = $_GET['dtNascimento'];
    $nota = $_GET['nota'];
    $curso = $_GET['curso'];

    $aluno = new Aluno($nome, $dtNascimento, $nota, $curso);

        ou*/

    $aluno = new Aluno($_GET['nome'], $_GET['dtNascimento'], $_GET['nota'], $_GET['curso'], $_GET['dtNascimento']);

    $_SESSION['aluno'] = serialize($aluno);
  
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
<div class="container">
    
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">Mostrar os dados do objeto</button>
    
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Itens do objeto criado da classe Aluno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_SESSION['aluno']; ?>
                        <br>
                        <a href="Mostra.php">Mostrar os dados</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

