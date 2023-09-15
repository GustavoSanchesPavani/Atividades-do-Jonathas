<?php
// Tipos de Dados
// ====================
/* Referências de Vídeos
   1. Tipos primitivos do PHP - @CursoemVideo de PHP - Gustavo Guanabara
      https://www.youtube.com/watch?v=JFEelabfc1o&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=21

*/
# As variáveis podem ser de diferentes tipos de dados
# A mesma variável pode ter tipos diferentes de valores

$variavel = 100;
$variavel = "cem";
# Atribuições de tipos diferentes para a mesma variável

# Apesar das variáveis serem de tipo implícito
# é importante conhecer os tipos de variáveis
$inteiro = 100;         # São valores inteiros sem casas decimais
$float = 10.5;          # São valores seguidos de casas decimais
$bool = true;           # Assume valores Falso ou Verdadeiro
$string = "Bom dia";    # Cadeia de caracteres
$array = [1,2,3];       # Coleção de valores
$nulo = null;           # Variável com valor nulo
//$pessoa = new Pessoa(); # Objeto compropriedades e métodos

echo $inteiro;