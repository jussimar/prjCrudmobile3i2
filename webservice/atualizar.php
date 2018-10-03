<?php

    try{
        $conexao = mysqli_connect("localhost","jussimar","","bancocrud");
        //                          servidor   usuario   senha  banco
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        
        $query = "UPDATE tb_pessoa SET nm_pessoa =  '$nome', nr_cpf ='$cpf' WHERE cd_pessoa =$codigo";
        
        mysqli_query($conexao,$query);
        
        echo "Alteração realizada com Sucesso";
        
    }catch(Exception $e){
        echo "Erro ao Atualizar!";
    }
