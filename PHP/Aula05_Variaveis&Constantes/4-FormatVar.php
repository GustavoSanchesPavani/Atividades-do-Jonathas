<?php
    // Formatação de variáveis numéricas
    # Utilizando numberformat()
    // Referência W3schools
    //    https://www.w3schools.com/php/func_string_number_format.asp
    
    echo "Formatação de variáveis numéricas <br>";
    echo "<br>";

    # Definindo variáveis
    $Val = 75.5; # Float

    // 1 - Apresentando a(s) variávei(s) SEM formatação
    echo '1 - Apresentando a(s) variávei(s) SEM formatação <br>';
    echo "Valor da variável R$: $Val";

    # Verifica o tipo de variável
    # "echo var_dump();" ou apenas: "var_dump();" o resultado é o mesmo.
    echo "<br> Verifica o tipo da variável: ";
    echo var_dump($Val);
    echo "<br>";

    // 2 - Apresentando a(s) variávei(s) COM formatação
    echo "<br>";
    echo '2 - Apresentando a(s) variávei(s) COM formatação <br>';
    $ValFormat = number_format($Val, 2,',','.');
    echo "Valor da variável R$: $ValFormat <br>";

    $ValFormat = number_format($Val, 2,'.',',');
    echo "Valor da variável R$: $ValFormat <br>";

    # Verifica o tipo de variável após a formatação
    echo "Verifica o tipo da variável Formatada: ";
    var_dump($ValFormat);
    echo '<br>';
    echo "Verifica o tipo da variável utilizada para a Formatação: ";
    var_dump($Val);
    echo '<br>';
    
?>