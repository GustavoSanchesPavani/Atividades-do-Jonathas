<?php
	/* Declarações / Instruçõescondicionais
	São intruções de controle de fluxo de programa	
	de acordo com uma condição lógica é constuida com operadores
	de comparação (<, > etec) e de lógica (and e or)

    */

    // Exemplo 1 - Teste com variável "string"
    $nome='jogo';
    if($nome == 'jogo'){
        echo '<br>';
        echo 'Exemplo 1 - Teste com variável "String"';
    }

    // Exemplo 2 - Teste com variável numérica
    // IF ... ELSE
    $idade = 18;
    if($idade <=18){
        echo '<br>';
        echo 'Exemplo 2 - Teste com a variável numérica <br>';
        echo 'IF <br>';
    }else{
        echo '<br>';
        echo 'Exemplo 2 - Teste com a variável numérica <br>';
        echo 'IF ... ELSE <br>';
        echo 'Menor ou igual a 18 anos <br>';
    }
    // Exemplo 3 - Teste com variável numerica / Média do senhor Leandro
    // IF ... ELSEIF ... ELSE
    // O teste lógico pode verificar mais de 
    // verificação de verdadeiro 
    $media = 9;
    echo '<hr>';
    if($media <= 3){
        echo 'Exemplo 3 - Teste com variável numerica / Média do senhor Leandro <br>';
        echo 'Reprovado <br>';

    } else if($media <= 6){
        echo 'Exemplo 3 - Teste com variável numerica / Média do senhor Leandro <br>';
        echo 'Necessairo fazer exame <br>';

    } elseif($media <= 7 ){
        echo 'Exemplo 3 - Teste com variável numerica / Média do senhor Leandro <br>';
        echo 'Não precisa fazer exame <br>';

    } else{
        echo 'Exemplo 3 - Teste com variável numerica / Média do senhor Leandro <br>';
        echo 'Aprovado <br>';
    }

    // Exemplo 4 - Podemos deixar de ultilizar
    // chaves quando existir uma única intrução
    // no bloco do IF

    $media = 6.5;
    echo '<hr>';
    if($media <= 3){
        echo 'Exemplo 4 - Sem uso de "chaves" no bloco IF, nota <= 3 <br>';
    } else if($media <= 6 ){
        echo 'Exemplo 4 - Sem uso de "chaves" no bloco IF, nota < 6 <br>';

    } elseif($media >= 7 ){
        echo 'Exemplo 4 - Sem uso de "chaves" no bloco IF, nota >= 6 <br>';
    }
    else{
        echo 'Exemplo 4 - Sem uso de "chaves" no bloco IF, nota >= 8 <br>';
    }

    // Exemplo 5 - Podemos deixar de ultilizar
    // chaves quando existir uma única intrução
    // no bloco do IF

    $media = 6.5;
    echo '<hr>';
    if($media <= 3){
        echo 'Ex.5 - Sem uso de "chaves" no bloco IF, nota <= 3 <br>';
    } else if($media <= 6 ){
        echo 'Ex.5 - Sem uso de "chaves" no bloco IF, nota < 6 <br>';

    } elseif($media >= 7 ){
        echo 'Ex.5 - Sem uso de "chaves" no bloco IF, nota >= 6 <br>';
    }
    else{
        echo 'Ex.5 - Sem uso de "chaves" no bloco IF, nota >= 8 <br>';
    }
?>