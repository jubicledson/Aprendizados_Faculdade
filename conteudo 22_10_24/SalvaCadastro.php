<?php

    include 'ConexaoSQL.php';

    if(isset($_GET['btnSalvaTurma'])){

        $turma = $_GET['nomeTurma'];

        $sql = "INSERT INTO `turmas` (`nome`) VALUES ('$turma')";

        $resultado = $conn->query($sql);  

        if($resultado){
            echo "Turma executada";
        }else{
            echo "Erro turma";
        }
    }
    if(isset($_GET['btnSalvaAluno'])){

        $nomeAluno = $_GET['nomeAluno'];

        $idTurma = $_GET['Turmas'];

        $sql = "INSERT INTO `alunos` (`nome`, `id_turma`) VALUES ('$nomeAluno', '$idTurma');";

        $resultado = $conn->query($sql);  

        if($resultado){
            echo "Aluno executada";
        }else{
            echo "Erro Aluno";
        }
    }
    if(isset($_GET['btnSalvaNota'])){
        $nota = $_GET['notaAluno'];
        if($nota > 10 || $nota < 0){
            echo "Nota Inválida! Insira uma nota Correta";
        }else{
            $idAluno = $_GET['idAluno'];

            $idTurma = $_GET['idTurma'];
    
    
            $sql = "INSERT INTO `notas` (`valor`, `id_aluno`, `id_turma`) VALUES ('$nota', '$idAluno', '$idTurma');";
    
            $resultado = $conn->query($sql);  
    
            if($resultado){
                echo "nota executada";
            }else{
                echo "Erro Aluno";
            }
        }

    }

?>