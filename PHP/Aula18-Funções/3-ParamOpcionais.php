<?php
    //Funções em php
    //Parametros opcionais
    #Exemplo 1
    function divisor($a, $b = 2){
        #Parâmetro $a
        #PAssa a ser obrigatorio
        # Parametro $b
        # é um opcional e deve ser o ultimo deles
        #Caso naço seja passado um valor ele assume o valor padrão
        #No caso o valor numerico 2
        echo $a / $b;
    }
    //Não passou paramtro e adotou o padrao
    divisor(10); #5
    echo "<br>";
    divisor(20, 10); #2
?>