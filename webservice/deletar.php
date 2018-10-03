<?php

    try{
        $conexao = mysqli_connect("localhost","jussimar","","bancocrud");
        
        $codigo = $_GET['codigo'];
        
        $query = "delete from tb_pessoa where cd_pessoa = $codigo";
        
        $result = mysqli_query($conexao,$query);
        
        echo "removido com sucesso";
        
        
    }catch(Exception $e){
        echo "Erro ao cadastrar!";
    }finally{
        $conexao->close();
    }
