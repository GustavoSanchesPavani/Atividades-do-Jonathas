<?php
// Variáveis 
// ==================
# Utilizadas para armazenar dados: 
# números, texto etc.
# podemos apresentar e modificar os
# valores contidos em seu interior

# São definidas com um sinal de $
# e o nome da variável como identificador

$variavel01;
# Foi apenas criado um espaço de memória nomeado

$variavel02 = 100;
# Foi criado um espaço de memória com atribuição de valor

$variavel02 = "Teste";
# Conteúdo da variável alterado com valor e tipo de dado
// Na linguagem a variável não é tipificada .

# Para apresentar o conteúdo 
echo $variavel02;

// As variáveis são "case sensitive"
# Portanto, variações de caixa alta e baixa
# no nome da variável, demonstram variáveis diferentes
$variavel02 = 150;
$Variavel02 = 150;

// Formas inadequadas de criar variáveis
/*
    $1var = 0;
    $!var = 0;
    $var(1) = 0;
    $var um = 0;
    $var-um = 0;
*/
// Formas adequadas de criar variáveis
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_umUm = 0;
$_1var = 0;

/* Não há forma mais correta de nomear uma variável.
   Porém é recomendado que se utilize um mesmo padrão
   Ou, verificar se o cliente tem um padrão.
   Exemplos sugeridos são as nomeações com o padrão:
   Camel Case ou "Snake Case"

   Exemplos: 
*/
$umaVariavel = 0; // Camel Case - Padrão muito utilizado
$uma_variavel = 0; // Snake Case - Com "Underscores" é outro padrão
$UmaVariavel = 0; // Studly Case - Não é muito recomendado, pois conflita com nomes de classes

?>