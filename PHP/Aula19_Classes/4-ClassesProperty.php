<?php

    // Classes: Somente com propriedades 
    //          Somento com métodos
    // 
    // Podemos consturir classes sem qualquer tipo de Método.
    // Ou ainda, classes sem qualquer tipo de Prorpiedades.

    #Exemplo 1
    class Pessoa1{
        # Classe apenas com Propriedades
        public $nome, $codNome;
    }

    class Pessoa2
    {
        # Classe apenas com Métodos
        public function msg(){
             // Método acessivel fora da classe
        }

        private function andar(){
            // Método acessivel apenas dentro da classe 

        }
        # Os objetos não sabem da existencia deste método

        public function movimento (){
            $this ->andar();
        }
    }  

    // A classe "Pessoa1" permite acesso externo de duas propriedades.
    // Pois, o modificador de acesso é "public"
    $humano1 = new Pessoa1();
    $humano1->nome='Ana';
    $humano1->codNome='Professora'; 

    $humano2 = new Pessoa2();
    $humano2->andar();
    # Esta instrução gera erro porque o método é "Privat"
    # O modo correto é chamar o método externo "Movimento"
    $humano2->movimento();

?>