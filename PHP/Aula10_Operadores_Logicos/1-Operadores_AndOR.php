<?php

 /*
 Operadores lógicos: AND; OR
                     &&; ||

 -Frequentemente são utilizados com os operadore de 
 comparação. Permitem ligar varias comparações gerando
 preposição

 Referencias: 
 1. W3schools
 */

 $a= 100;
 $b = 200; 

 # Os valores armazenados em X são do tipo booleano
$x= ($a < $b) && ($a < 1000);    # AND => True
$x = ($a > $b) || ($a > 1000);   # OR => False
$x = ($a ==100 ) && ($b < $a);   # and => False

$x = ($a > $b) || ($a < 1000);   # AND => True
$x= (true) && (true);

$x = ($a > $b) || ($a < 1000);   # OR => False
$x= (true) || (true);           

$x = ($a > $b) || ($a < 1000);   # AND => False
$x= (true && false);   

// --- ! = Operdor de negação 
$a = false;     #FALSE
$x = !$a;        #TRUE



 ?>