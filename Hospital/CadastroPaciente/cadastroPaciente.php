<?php

include '../ConexaoSql.php';

try{
    $sql = "INSERT INTO `tblpaciente` (`nomePaciente`, `cpfPaciente`, `leitoPaciente`, `situacaoPaciente`, `cuiResPaciente`) VALUES (:nome, :cpf, :leito, :situacao, :crp)";
    
    $comando = $conn->prepare($sql);

    $resultado = $comando->execute(array('nome' => $_POST['nomePaciente'],'cpf' => $_POST['cpfPaciente'], 'leito' => $_POST['leitoPaciente'], 'situacao' => 1, 'crp' => $_POST['crpUsuario'] ));
    if($resultado){
        echo "Paciente Cadastrado";

    }else{
        echo "Erro ao executar o cadastro";
    }

}
catch(Exeption $e){
    echo "Erro: $e";
}

?>