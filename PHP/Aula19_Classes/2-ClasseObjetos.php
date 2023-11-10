<?php

    // Classes - Objetos e Instancias
    # Para trabalhar com classes é necessário instanciar objetos
    # desta classe 

    # Para acessar as propriedades de uma clases, dentro dos métodos
    # da classe, é preciso ultilizar a pseudo variável "$this" mais o
    #operador seta "->".
    
    # Exemplo 1 
    # A conntução da classe antes ou depois do codigo 
    # principal, não interfere em sua visibilidade ou sitaxe.
    class Humano{
        # Propriedade: Neste caso já preenchidas.
        public $nome = 'Professor'; #'public' modificador de acesso.
        public $codNome = 'Jhonatas';

        # Metodos
        public function nomeCompleto(){
            return $this-> nome . ' '. $this->codNome;
            $nome = 'teste';
        }
    }
    $homem = new Humano();

    echo $homem -> nomeCompleto(); 
    
    //  CONSTRUCT
    #   O Construct é um método especial dentro de uma classe
    #   que é executado altumaticamente, quando criado um objeto
    #   a partir de uma classe    
    #   Este método é definido de uma forma especial com _
    #   dois "underscore". 
    class Humano2
    {
        private $nome; # 'private' indica que esta propriedade é visivel apenas pelos 
                      # metodos do interior da class. Os objetos não sabem da 
                      # existencia destas propriedades.

        private $codNome; 

        # Esta função é executado de forma automática quando se estancia
        # um objeto desta classe.
        
        function _construct($n, $c){
            $this->nome -> $n;
            $this->codNome -> $c;
            
        }
        public function funCodNome(){
           return $this->nome . " ". $this->codNome;
        }
    }

    $homem = new Humano2('Ana', 'João');
    echo $homem -> funCodNome();

?>