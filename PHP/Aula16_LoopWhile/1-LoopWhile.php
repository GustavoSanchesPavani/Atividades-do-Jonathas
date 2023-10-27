<?php
    /*
        Existem 4 ciclos em php e sao utlizados para executar um codigo repetidas vezes

    #Loop while
    */

    # Neste tipo de laço o codigo interno pode nunca ser executado, a menos que 
    # a condição seja verdadeira
    $x = 1;
    while($x <= 10){
        echo 'Ciclo While em execução' . $x;
        echo '<br>';
        $x++;
    }
    echo '<br>';
    //Demonstrar o uso quando tivermos apenas uma instrução
    //no bloco while
    //Passo 1
    $x = 1;
    while($x <= 10)echo 'Ciclo While em execução' . $x++ . '<br>';
        $x++;
?>