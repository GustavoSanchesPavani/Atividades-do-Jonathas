<?php

    //Classes - CONSTRUCT
    # Apenas para caso de funções Construct sem parâmetros
    # poderam alterar a forma de instancia do objeto

    class Humano2
    {
        function __construct()
        {
            //Código
        }
    }
    $homem = new Humano2; //Esta forma funciona apenas qunado 
                          # não paramentros.
    $homem = new Humano2();
?>