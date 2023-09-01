<?php
    // Variaveis - Continuação
    // ========================

    // Definição de variaveis
    $nome = "João"; // String
    $aula = 'PHP'; // String
    $idade = 19; // Int
    $peso = 70.5; // Float
    $alt = 17.1; // Float

    // Utilizando variaveis
    echo "Utilizando variaveis";
    echo "<br>";
    echo "Meu nome: $nome <br>";
    echo 'Minha idade: $idade <br>';
    // Concatenação de String com variavel
    echo 'Minha idade: ' . $idade;
    echo '<br>';

    // Informaçõe sobre variaveis
    echo '<br> Informações sobre variaveis <br>';
    var_dump($nome);
    echo '<br>';
    var_dump($idade);
    echo '<br>';
    var_dump($peso);
?>