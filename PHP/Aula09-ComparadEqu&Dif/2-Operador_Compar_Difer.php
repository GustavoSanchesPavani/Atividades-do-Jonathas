<?php

/* Operadores de comparação
   Permite a comparação entre valores.
   Verificam igualdade e diferença, maior, menor ou se a variavel é de um mesmo tipo.
   Resultado de comparação sempre será um Booleano, False ou True.
*/

/* Referencias:
   1-
   
   2-
   */

// COMPARADOR DA DIFERENÇA
// Exemplos
$a = ( 2 != 3 );       # True

// Forma alternativa, embora mesmo ultilizada

$a = (100 <> 100 );    # False

$a = (50 != 50);       # False
$a = (50 != '50');     # False

// Neste caso, também, é avalidado apenas significado dos 
// dados e não os tipos dos dados. 

$a = (50 !== 50);      # True
// Neste caso, também, é avalidado o significado e os 
// tipos dos dados.

?>