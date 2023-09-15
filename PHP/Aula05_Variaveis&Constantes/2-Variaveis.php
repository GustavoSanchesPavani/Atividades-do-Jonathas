<?php
    // Variáveis Continuação
    // Definindo variáveis
    $nome = "João"; # string
    $aula = 'PHP';  # string
    $idade = 19;  # int
    $peso = 70.5; # folat
    $alt = 17.1;  # float

    // Ver1 - Utilizando as variáveis
    echo "Utilizando as variáveis";
    echo "<br>";
    echo "Meu nome: $nome <br>";
    echo 'Minha idade $idade <br>';
    // Concatenação de string com '.'
    echo 'Minha idade ' . $idade;
    echo '<br>';
    
    // Ver2 - Utilizando as variáveis
    echo "<p> Meu nome $nome, tenho $idade anos de idade.";
    echo "<br>";
    echo "Minha altura e peso são $alt e $peso respectivamente <p>";

    // Informações sobre variáveis
    echo 'Informações sobre variáveis';
    echo "<br>";
    var_dump($nome);
    echo '<br>';
    var_dump($idade);
    echo '<br>';
    var_dump($peso);



?>