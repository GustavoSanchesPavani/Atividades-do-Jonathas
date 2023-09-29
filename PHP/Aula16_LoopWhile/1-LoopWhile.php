<?php
    /* --- Loops (ciclos ou laços) em PHP
    Existem 4 ciclos em PHPn e são utilizados para executar
    um codigo (ou bloco de codigo) repetidas vezes
    
    # Loop WHILW

    Referencias
    
    */

# Neste tipo de laço codigo interno pode nunca ser executado, 
#a menos que a condição seja verdadeira  
 $x = 1;
 while($x <= 10){
    echo 'Ciclo while em execução'. $x;
    echo'<br>';
    $x++;
 }
 echo '<br>';

// Demonstrar quando tivermos apenas um instrução
// no bloco While
// Passo 1

$x = 1;
 while($x <= 10) echo 'Ciclo While em execução'. $x++ . '<br>';
    
 ?>