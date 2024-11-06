<?php
    include "../ConexaoSql.php";

    $sql = "SELECT * FROM `tblusuario` WHERE `senhaUsuario` = :senha AND `idLoginUsuario` = :idLogin";
            
    $comando = $conn->prepare($sql);
    
    $resultado = $comando->execute(array('senha' => md5($_POST['senhaUsuario']), 'idLogin' => $_POST['idLogin']));
?>


<?php
    if($resultado){
        $dados = 0;
        $login = false;
        while($dados = $comando->fetch()){
            $id = $dados['idUsuario'];
            $nome = $dados['nomeUsuario'];
            $tipo = $dados['tipoUsuario'];
            $crm = $dados['crmUsuario'];
            $especialidade = $dados['especialidadeUsuario'];
            $arrDados = array($id, $nome, $tipo, $crm, $especialidade);
            $login = true;
        }
        if($login == true){
            echo "Usuario Logado";
            session_start();
            $_SESSION['login'] = $arrDados;
            header('Location: http://localhost/conteudo/LoginUsuario/HomeUsuario.php');
        }else{
            echo "Erro ao logar";
        }
      
    }
?>