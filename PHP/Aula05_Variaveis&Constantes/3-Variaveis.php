<?php
    // https://www.php.net/manual/pt_BR/language.variables.variable.php
    // Uma variável Variável
    // Disponível https://www.php.net/manual/pt_BR/language.variables.variable.php
    
    # Uma variável
    $a = "Ola2";
    
    # Uma variável Variável
    $$a = "Word";

    echo "$a <br>";
    echo "${$a} <br>";
    echo "Variável $a e Variável variável ${$a}";
    
?>