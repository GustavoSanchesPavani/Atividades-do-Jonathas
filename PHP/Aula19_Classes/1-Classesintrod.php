<?php
    // Classes
    // Referencias
    // 1.W3SCHOOL

    # Introdução Prog. Orient. Obj; (POO)
    #
    # Uma classe é definida pela declaração "class"
    # seguido de um nome da classe. Possui chaves 
    # de limitação e de contrução de codigo.
    #
    # Por convenção de PSR-1 Basic code Instandard
    # o nome de uma classe deve ser.
    # O corpo da classe deve ser definido da seguinte forma

        # Exemplo 1 - Difinição de classes
        class AnimaisMamiferos # Primeira letra capital
        {
            // Propriedades e Método desta classe
        }
        class Humano
        {
             // Propriedades e Métodos desta classe
        }
        /* O corpo de uma classe contém PROPRIEDADES e MÉTODOS 
        Proriedades - São variaveis em php que armazenam 
	                  as caracteristicas do objeto. Tambem, 
	                  são conhecidas como camplos "fields"
                      ou atributos de uma classe. 
                      Precisam ter um nivel de acesso especificos
                      (oublica, reservada, etc).
        Métodos - São as funções que fedinem o que o objeto pode fazer.
        */

        # Exemplo 2
        class FiguraGeometrica 
        {
            # Definição dos camplos/altributos
            public $largura, $altura; 
            public $x, $y;

            # Definição de método (é uma função)
            function metCalArea ($a, $b)
            {
                return $a * $b;
            }
        }
        
?>