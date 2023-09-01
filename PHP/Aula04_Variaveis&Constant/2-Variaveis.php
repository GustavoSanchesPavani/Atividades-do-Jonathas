<?php
// Variáveis - Continuação
// ==================

    // Definição de variáveis
    $nome = "João"; // String
    $aula = 'PHP'; // String
    $idade = 19; // int
    $peso = 70.5; // float
    $alt = 17.1; // float

    // Utilizando variáveis

    echo "Utilizando variáveis";
    echo "<br>";
    echo "Meu nome: $nome <br>";
    echo 'Minha idade $idade <br>';
    // Concatenação de string com "."
    echo 'Minha idade ' . $idade;
    echo '<br>';

    // Informações sobre variáveis 
    echo '<br> Informações sobre variáveis <br>';
    var_dump($nome);
    echo '<br>';
    var_dump($idade);
    echo '<br>';
    var_dump($peso);
    
?>