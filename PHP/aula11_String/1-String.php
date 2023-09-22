<?php

/* String
   "String" é um concatenado de carateres armazenados em uma variável.
   Podemso definir uma string com um conjunto de letras e simbolos designados por texto.

   Podem ser delimitadas por 
   aspas simples '' 
   aspas duplas  ""
   Podemos usar um ou outra apenas devemos seguir um padrão.

   Referências
   1- W3schools

*/
$a = 'Está é uma string';
$b = "Temos outra string ";
echo $a. "<br>";
echo $b. "<br>";


// Contatenação de "String"
echo $a. " cocatenada com - ". $b . "<br>";

// Populando a String
# Observe que a variavel que contem a "String" funciona um "array"
echo $a[2];

// Comparação de String
$c = ($a == $b);  #False
$d = ($a != $b);  #True

# Exemplo 2- Funçoes nativas
$texto = 'Frase com x carateres = 27';
# Retornar o numero de carateres 
$num_caracteres = strlen($texto);
echo $num_caracteres . "<br>";

# Exemplo 3 - Retorna = letras a partir de uma posição 
$parte_texto = substr($texto, 0, 4);
echo $parte_texto . "<br>";

# Exemplo 5 - Retorna maiúsculas
$texto_maiuscula = strtoupper($texto);
echo $texto_maiuscula. "<br>";

# Exemplo 5 - Substituir uma letra por outra no texto
$subst_texto = str_replace('a' , 'x', $texto);
echo $subst_texto , "<br>"
?>
