<?php
    //Loops (ciclos) em PHP
    #FOREACH
    #Permite executar um bloco de codigo a partir de um "Array"

    #Exemplo 1
    echo "Exemplo 1" . "<br>";
    $nomes = ['Mari', 'Agda', 'Lena'];
    foreach($nomes as $nome){
        echo $nome . "<br>";
    }
    echo "<hr>";
    #Notar que não há necessidade de uma variavel incremental
    #Automaticamente cada elemento do "array" é transferida
    #Para a variavel logo apos a declração "as" 

    #Exemplo 2
    #Outra assinatura do laço foreach
    # "Array" associativo 
    echo "Exemplo 2 " . "<br>";
    $EstadoCapital = [
        'Acre' => 'Rio Branco',
        'Amapá' => 'Macapá',
        'Alagoas' => 'Maceió',
        'Ceará' => 'Fortaleza'
    ];
    foreach($EstadoCapital as $chave => $value){
        echo "Para o estado $chave a capital é: $value <br>"; 
    }
?>