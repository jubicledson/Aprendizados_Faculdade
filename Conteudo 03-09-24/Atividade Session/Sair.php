<?php
    $atual = 'sair';
    include 'Menu.php' ;

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php echo "<h1>Sessão Encerrada</h1><br><a href='primeira.php'> Cadastrar um novo Nome </a>"; ?>
    </div>
    
</body>
</html>