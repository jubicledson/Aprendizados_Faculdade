<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        session_start();
        //var_dump($_SESSION['login']);
        echo "<h2>Bem vindo! ".$_SESSION['login'][1]."</h2>";
    ?>
</body>
</html>