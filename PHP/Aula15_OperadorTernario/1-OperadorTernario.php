<?php

/* --- Operador Ternario   
    É um operador condicional que pode substituir uma estrutura 
    simples de IF ... ELSE


    Operator Nome Example Result Show it
    ?: Ternary $x = expr1 ? expr2 : expr 3

    O operador ternário precisa de três espressões:

    1. Expressão lógica que avaliada, 
        caso VERDADEIRO executa o código
    2. exprTRU
    É o código a ser executada quando o resultado logico for verdadeiro

    3. exprFALSE
        É o codigo a ser executado quando o resuktado for falsa
*/

#Sintexe 1
$opcao = 1;
$nome = $opcao == 1 ? 'Juju do pix' : 'Anão rebaixado'; #Mari   
echo $nome;
echo '<br>';

#Sintexe 1
$opcao == 0 ? $nome = 'Juju do pix' : $nome = 'Anão rebaixado'; #Anao Rebaixado   
echo $nome;
echo '<br>';

?>
<!--Exemplo de uso no HTML e CSS-->
<!-- PHP com HTML-->
<!-- Contrução similar a sintaxe contruida com IF-->
<?php if($opcao == 1):?>
    <h2>SIM-2</h2>
    <?php else:?>
        <h2>NÃO-2</h2>
        <?php endif;?>

        <!--Exemplo, para controlar CSS-->
        <h2 style="color:<? = $opcao == 1 ? 'red' : 'blue' ?>">
        Esse pinto ta em vermelho </h2>