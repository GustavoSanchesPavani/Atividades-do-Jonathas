<?php
// Variáveis
// ======================
# Utilizadas para armazenar dados: números, textos, etc
# podemos apresentar e modificar os valores contidos em seu interior ao longo do código

# São definadas com um dollar $ e o nome da variável como identificador
$variavel01;
# Foi criado um espaço de memória sem conteúdo. Variável não inicializada

$variavel02 = 100;
# Foi criado um espaço de memória com atribuição de valor. Temos uma variável inicializada

$variavel02 = "Teste";
# Conteúdo da variável alterado com valor e tipo de dado
# Observamos que a vairável não é tipificada

#Apresentar conteúdo das variáveis
echo $variavel02;

# As variáveis são "Case sensitive"
# Portanto, a variação de caixa alta e baixa denotam variáveis diferentes.
$Variaval02 = 150; /* Uma variável   */
$variavel02 = 100; /* Outra variável */

# Formas erradas de nomear variáveis / Variáveis mal definidas
/*
$1var = 0;
$!var = 0;
$variavel(1) = 0;
$variavel um = 0;
$variavel-um = 0;
*/

# Formas corretas de nomeação/definição de variáveis
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_umUm = 0;
$_1 = 0;

# Não há uma definição da forma mais correta de se nomear uma variável.
# Porém, é recomendado um mesmo padrão em um memso projeto.
# Ou, verificar se o cliente tem ou deseja um determinado padrão.
# Exemplos:
$umaVariavel = 0;  # Camel Case - Padrão muito utilizada
$uma_variavel = 0; # Snake Case - Com underscores - Outro padrão 
$UmaVariavel = 0;  # Studly Case - Não recomendo, pois é utilizado em nomes de classes

?>