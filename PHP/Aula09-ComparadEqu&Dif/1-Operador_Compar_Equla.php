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
  
// COMPARADOR DA IGUALDADE
// Exemplos 
   $a = (2 == 3);     #false
   $a = (100 == 100);  #true
   $a = (50 == '50');  #true

# Nesse caso ocorre uma verificação de igualdade.
# Sem a comparação do tipo de variável.
$a = (50 === '50'); # Flase

// Atenção 
// Nós não conseguimos visualizar o resultado (True, False)
// Mas, podemos verificar a sua existêcia
echo $a;


// Como solução vamos testar sua expressa sua existencia.
if($a){
    echo 'True';
    echo '<br>';
}else{
    echo 'false';
    echo '<br>';
}
?>