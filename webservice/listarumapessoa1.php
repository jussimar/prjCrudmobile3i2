<?php

    try{
        $conexao = mysqli_connect("localhost","jussimar","","bancocrud");
        
        $codigo = $_GET['codigo'];
        
        $query = "SELECT * FROM tb_pessoa where cd_pessoa = $codigo";
        
        $result = mysqli_query($conexao,$query);
        
        $linha = mysqli_fetch_assoc($result);
        
        $registro = array(
            'pessoas' => array(
                array(
                    'codigo' => $linha['cd_pessoa'],
                    'nome' => $linha['nm_pessoa'],
                    'cpf' => $linha['nr_cpf']
                )    
            )  
        );
       
 
        echo json_encode($registro);
        
    }catch(Expetion $e){
        echo "Erro ao cadastrar!";
    }
