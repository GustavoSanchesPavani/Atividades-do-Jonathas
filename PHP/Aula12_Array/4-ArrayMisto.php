<?php

/* --- Arrays mistos (Combinação de "Arrays" Numericos e Associativos)
    Podemos criar um array que combine indices numéricos
    ou nominais. Embora não seja ultilizado com frequencia,
    devido a dificuldade de gerenciar os dados neste de "array".

    Referencias
    1-W3schools

*/
$dados =[ 
 0 => 10, 
 'nome' => "Aninha",
 'sobrenome' => "Vendedora de CD",
 10 => 100
];

// Para apresentar o conteudo 
echo $dados[0] . "<br>";
echo $dados['nome'] . "<br>";
echo $dados['sobrenome'] . "<br>";

?>