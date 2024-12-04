<?php

    function inserirDados($nomeItem, $imagemItem, $minimoItem){
        include "../ConexaoSql.php";
        try{

            $sql = "INSERT INTO `tblitem` (`nomeItem`, `imagemItem`, `minimoItem`, `estadoItem`, `vencedorItem`) VALUES (:nome, :imagem, :minimo, 'aberto', '-')";
            
            $comando = $conn->prepare($sql);
    
            $resultado = $comando->execute(array('nome' => $nomeItem, 'imagem' => $imagemItem, 'minimo' => $minimoItem));
    
            if($resultado){
                return "Item cadastrado";
                
            }else{
                return "Erro ao executar o cadastro";
            }
        }
        catch(Exeption $e){
            return "Erro: $e";
        }
        
    }
    $nome = $_FILES['imagem']['name'];
    $nome_imagem = "../imagens/".str_replace('.', time().".", $nome);
    $origem = $_FILES['imagem']['tmp_name'];
    $resultado_copia = move_uploaded_file($origem, $nome_imagem);
    var_dump($nome_imagem);
    $dados = inserirDados($_POST['nomeItem'], $nome, $_POST['minimo']);
    $resultado = $dados;

    echo $resultado;

?>