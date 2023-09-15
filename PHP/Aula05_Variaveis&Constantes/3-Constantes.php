<?php
    // Trabalhando com Constantes
    # São utilizadas com variáveis que não devem mudar seu valor de conteúdo
    # Por padrão são definidas com letras maiúsculas
    echo "Trabalhando com Constantes <p>";
    
    // Exemplos
    # Definindo uma variável constante de nome TAXA com 50%
    define("TAXA", 0.5);
    # Definindo uma variável constante de nome JUROS de 1%
    define("JUROS", 0.01);

    // Utilizando variáveis constantes
    echo "Valor da taxa: " . TAXA . "% <br>";
    echo "com valor de juros igual a: " . JUROS . "% <br>";

?>