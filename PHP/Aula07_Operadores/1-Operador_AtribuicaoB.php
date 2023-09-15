<?php
/* Operadores de Atribuição Combinados 
    Referências:
    1. W3schools
       https://www.w3schools.com/php/php_operators.asp
*/

// Operadores
# Operador de atribuição (assigment)

$a = 10;
$b = 20;
$x = $y = $z = 100;

$resultado = $a + $b;   # 30
echo $resultado;
echo '<br>';

$resultado = $a + 100;  # 110
echo $resultado;
echo '<br>';

$resultado = $a + 10 + $z + 10;  # 130
echo $resultado;
echo '<br>';

