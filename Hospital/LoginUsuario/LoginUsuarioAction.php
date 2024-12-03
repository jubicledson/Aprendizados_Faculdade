<?php
    include "../ConexaoSql.php";

    $sql = "SELECT * FROM `tblusuario` WHERE `senhaUsuario` = :senha AND `idLoginUsuario` = :idLogin";
            
    $comando1 = $conn->prepare($sql);
    
    $resultado = $comando1->execute(array('senha' => md5($_POST['senhaUsuario']), 'idLogin' => $_POST['idLogin']));
?>


<?php
    if($resultado){
        $dados = 0;
        $login = false;
        while($dados = $comando1->fetch()){
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
            if($tipo == "MEDICO"){
                header('Location: http://localhost/Desenvolvimento Web 2/Hospital/LoginUsuario/HomeMedUsuario.php');
            }elseif ($tipo == "ENFERMEIRO") {
                header('Location: http://localhost/Desenvolvimento Web 2/Hospital/LoginUsuario/HomeEnfUsuario.php');
            }
        }else{
            echo "Erro ao logar";
        
        }
    }
?>