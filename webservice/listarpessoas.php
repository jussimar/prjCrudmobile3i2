<?php

    try{
        $conexao = mysqli_connect("localhost","jussimar","","bancocrud");
        
        $query = "SELECT * FROM tb_pessoa order by cd_pessoa asc";
        
        $result = mysqli_query($conexao,$query);
        
        $registro = array(
            'pessoas' => array()  
        );
        $i =0;
        while($linha = mysqli_fetch_assoc($result)){
            $registro['pessoas'][$i] = array(
                'codigo' => $linha['cd_pessoa'],
                'nome'=> $linha['nm_pessoa'],
                'cpf' => $linha['nr_cpf']
            );
            $i++;
        }
 
        echo json_encode($registro);
        
    }catch(Expetion $e){
        echo "Erro ao cadastrar!";
    }
