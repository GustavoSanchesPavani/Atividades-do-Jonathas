<?php
    //Funções em php
    //São blocos de codigos identificados por um nome e assinatura
    //Permite reutilizar o codigo
    //Estes blocos de coditgo são executados apenas quando solicitados

    #Exemplo 1
    function nomeDaFuncao(){
        echo "Codigo dentro de uma função";
        echo "<br>";
    }
    #Exemplo de chamada da função
    nomeDaFuncao();

    //Notar que os nomes da funções sao "case-sensitive"
    //ou seja, nomeDaFuncao é o mesmo que 
    nomeDaFuncao();

    //Não há um padrao de nomenclatura exigido pela linguagem
    //Porem, é recomendado que siga um padrao

    #Exemplos
    function camelCase(){

    }
    function snake_case(){
        
    }
?>