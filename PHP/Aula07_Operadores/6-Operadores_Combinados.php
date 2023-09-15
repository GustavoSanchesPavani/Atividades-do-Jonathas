<?php
    /* Operadores de Atribuição Combinados 
       Exemplos: "+="; "-+"; "*="
   
       Permitem que alteremos o valor de uma variável,
       a partir de valor original

       Referências:
       1. W3schools
          https://www.w3schools.com/php/php_operators.asp
    */

    // Exemplo de cálculo SEM os operadores combinados
    $x = 10;
    $x = $x + 10;   # 20
    echo '<br>';
    echo "$x";

    $x = $x - 7;    # 13
    echo '<br>';
    echo "$x";

    $x = $x * 2;    # 26
    echo '<br>';
    echo "$x";

    $x = $x / 2;    # 13
    echo '<br>';
    echo "$x";

    // Exemplo de cálculo COM os operadores combinados
    $x = 10;    # Reinicializando a variável
    $x += 10;   # 20
    echo '<br>';
    echo "$x";

    $x -= 7;    # 13
    echo '<br>';
    echo "$x";
    
    $x *= 2;    # 23
    echo '<br>';
    echo "$x";
    
    $x /= 2;    # 13
    echo '<br>';
    echo "$x";
?>