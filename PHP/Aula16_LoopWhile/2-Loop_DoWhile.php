<?php
    //Loops (ciclos) em PHP
    # DO WHILE
    # Diferente do loop WHILE o código interno laço DO WHILE sempre é executado
    #pelo menos uma vez.

    $x = 1;
    do{
        echo "Ciclo DO WHILE em execução " . $x;
        echo "<br>";
        $x++;
    }while($x < 10);
    echo "<br>";

    //Também, vamos reduzir o código para uma expressão
    # Parte 1
    $x = 1;
    do{
        echo "Ciclo DO WHILE em execução " . $x++ . "<br>";
    }while($x < 10);
    echo "<br>";
    
    # Parte 2
    $x = 1;
    do echo "Ciclo DO WHILE em execução " . $x++ . "<br>"; while($x < 10);
?>