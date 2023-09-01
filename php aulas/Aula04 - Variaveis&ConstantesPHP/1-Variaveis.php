<?php
    // Variaveis
    // =====================
    # Utilizadas para armazenar dados:
    # numeros, textos etc.
    # podemos apresentar e modificar os valores contidos em seu interior

    # São definidas com um sinal de $ e o nome da variavel como indentificador
    $variavel01;
    # Foi apenas criado um espaço de memoria nomeado

    $variavel02 = 100;
    # Foi criado um espaço de memoria com atribuição de valor

    $variavel02 = "Teste";
    # Conteudo da variavel alterado com valor e tipo de dado
    // Na linguagem a variavel não é tipificada.

    # Para apresentar o conteudo
    echo $variavel02;

    // As variaveis são "case sensitive"
    # Portanto, variações de caixa alta e baixa no nome da variavel
    # Demonstram variaveis diferentes
    $variavel02 = 150;
    $Variavel02 = 150;

    // Formas inadequadas de criar variaveis
    /*
        $1var = 0;
        $!var = 0;
        $var(1) = 0;
        $var um = 0;
        $var-um = 0;
    */

    // Formas adequadas de criar variaveis
    $var1 = 0;
    $var_um = 0;
    $varUm = 0;
    $_umUm = 0;
    $_1var = 0;

    /* 
        Não há uma forma correta de nomear uma variavel.
        Porém, é recomendado que se utilize um mesmo padrão.
        Ou verificar se o cliente tem um padrão
        Exemplos sugeridos são as nomeações com o padrão
        "Camel Case" ou "Snake Case"

        Exemplos:
    */
    $umaVariavel = 0; // Camel Case - Padrão muito utilizado
    $uma_variavel = 0; // Snake Case - Com "Underscores" é outro padrão
    $UmaVariavel = 0; // Studly Case - Não é muito recomendado, pois conflita com nomes de classes
?>