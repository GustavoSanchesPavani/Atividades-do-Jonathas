<?php

/* ... Array o que são 
   É uma matriz, uma coleção de valores

   Referencias:
   1. W3school
*/

# Exemplo 
$valores = array (1,2,3,4); #Array numerico
$nomes = array ("Franzinha", "Gustavinho das quebradas", "Walace Popozudo"); #array de texto

echo $valores[0];      #1
echo "<br>";
echo $nomes[2];         #Gustavinho das quebradas
echo "<br>";

# Operador de atribição com "array" =>
$dados  = [
    10 => 1000,
    20 => 2000,
    40 => 4000
    
];

echo $dados [10];
echo "<br>"
?>