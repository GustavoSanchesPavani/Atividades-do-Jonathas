<?php

    /* --- Declarações e Instruções Condicionais
        Switch - É uma alternativa ao encadeamento do IF ... ELSEIF
    
        Referências:
    1- W3school
*/

// Exemplo
$nome = "Maria";
switch ($nome) {
    case 'Juju do pix':
        // Execução do codigo
        echo 'Instrução do primerio bloco de comparação';
        echo '<br>';
        break;

        case 'Anão rebaixado':
        // Execução do código
        echo 'Intruções do segundo bloco de código';
        echo '<br>';
        break;

    default:
       // Execução do caso nenhuma das opções anteriores
       // sejam satisfeitas
       echo'Intruçã odo blco de alternativo';
       echo '<br>';
    break;
}
?>