<?php

/* --- Array Associativo
    Para esse tipo de "array" utilizamos um nome 
    para indicar a posição de armazenamento do "array"
    
    Referencia
    1- W3school
*/
// Exemplo
$valores = [
    'A' => 20,
    'nome' => 'Antonio Rabudinho',
    'endereço' => 'Praia Grande'
];
echo $valores ['A'] . "<br>";
echo $valores['nome'] . "<br>";
echo $valores['endereço'] . "<br>";

// Exemplo 2 - Demonstar a sobreposição 
$valores1 =[
    'A' => 20,
    'A' => 30
];
echo $valores1 ['A'] . "<br>";
?>