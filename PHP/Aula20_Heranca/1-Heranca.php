<?php

    //  HERANÇA - É uma classe base que apartir dela outras 
                # serão cridas
                #
                # Todas as classes geradas apartir da classe 
                # base são denominadas classe derivada.

    // Classe Base 
    class baseMamifero
    {
        public $especie;
        public $peso;

        function grupoEspec(){
            return "Este animal é do grupo {$this->especie}";
            // As chaves {} são necessario para fazermos a conctenação
            // da priedade. 
        }
    }
$grupAnimal = new baseMamifero();
$grupAnimal->especie = 'Monotremado';

echo $grupAnimal->grupoEspec();

    //Classe Derivada
    class Euterios extends baseMamifero
    {
        // Não é necessario definir novamente as propriedades 
        # e metodos, pois estes já existem na classe base. 
        # Porém, podemos acrescentar outras propriedade e
        # métodos 
        public $qtdPernas;
        public $peloSimOuNao;

        function qtdPernastem()
        {
            return "O animal possui {$this->qtdPernas} pernas";
        }
    }
    $animal = new Euterios();
    // Método da classe Derivada
    $animal->qtdPernas = 4;
    echo 'Método da classe Derivada';
    echo '<br>';
    echo $animal->qtdPernastem();
    echo '<br>';

    // Método da Classe Base 
    $animal->especie = 'Euterio';
    echo '<br>';
    echo 'Método da classe Base ';
    echo '<br>';
    echo $animal ->grupoEspec();
?>