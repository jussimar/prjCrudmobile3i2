<?php

    try{
        $conexao = mysqli_connect("localhost","jussimar","","bancocrud");
        //                          servidor   usuario   senha  banco
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        
        $query = "insert into tb_pessoa values (null,'$nome','$cpf')";
        
        mysqli_query($conexao,$query);
        
        echo "Cadastro realizado com Sucesso";
        
    }catch(Expetion $e){
        echo "Erro ao cadastrar!";
    }
