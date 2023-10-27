<?php

    // Funções - RETURN
    // A declaração RETURN provoca o fim da execução do codigo
    // de uma função. Retornando a continação da execução para o 
    // codigo que chamou a função 
    
    #Exemplo
    function apresentar_texto(){
        echo 'Este texto é apresentado na tela';
        return;
        echo 'Este texto NÃO é apresentado na tela';
    }
    apresentar_texto();

    #Exemplo 2
    echo '<br>';
    function adicionar($a , $b){
        $resultado = $a + $b;
        return $resultado;

        #Segunda forma
        return $a + $b;
        if ($resultado > 10){
            return true;
        }else{
            return false;
        }
    }

    $a=10;
    $b=20;
    $return = adicionar($a, $b);
    echo 'Faz a operação de soma' . '<br>';
    echo "$a + $b =" . $return;
    echo '<br>';

    # Exemplo 3 - Retrona NULL
    # Uma função sem qualquer valor de retono devolvera 
    # sempre um valor Null
    function avaliar(){
        //codigo
    }

    if(avaliar() == null){
        echo 'Função retonou um valor Null';
    }else{
        echo 'Função não retona um valor Null';
    }

?>