<?php

/* --- Array Multidimensional

    valores são outros "arrays". São "arrays" dentro
    outros "arrays"

*/

// Exemplo - Array miltidimensional de índice numérico
$dados =[
    [10, 20, 30],       # Elemento 1 de índice 0.
    [100, 200, 300],    # Elemente 2 de índice 1.
    [ 1000,             # Elemente 3 de índice 2. Subitem 1 de índice 0.
      2000,             # Elemente 4 de índice 3. Subitem 2 de índice 1.
      3000
    ]
];

// Como acessar os elementos deste tipo de "array"
echo $dados [2][2] . "<br>"; # 3000

// Exemplo 2 - Array multidimensional de índice numerdo
$dados2=[
    'cliente01' => ['nome', 'endereco', 'fone_contato'],
    'estados' => ['Alagoas', 'PQP', 'casa_do_kevin'],
    'frutas' => ['Banana_Grossa', 'Banana_Fina', 'Banana_Torta'],
];

// Como acesasr os elementos deste tipo de "array"
echo "<br>";
echo $dados2 ['cliente01'][0];
?>