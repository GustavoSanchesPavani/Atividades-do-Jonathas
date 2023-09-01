<?php
    // Trabalhando com constantes
    # São utilizadas como variaveis que não devem mudar o valor de conteudo
    # Por padrão são definidas com letras maisculas

    echo "Trabalhando com CONSTANTES <p>";

    // Exemplo
    # Definindo uma constante de nome TAXA com 50%
    define("TAXA", 0.5);
    # Definindo uma constante de nome JUROS com 1%
    define("JUROS", 0.01);
    
    # Utilizando constantes
    echo "Valor da Taxa: " . TAXA * 100 . "% <br>";
    echo "Com valor de Juros igual a: " . JUROS * 100 . "% <br>";
?>