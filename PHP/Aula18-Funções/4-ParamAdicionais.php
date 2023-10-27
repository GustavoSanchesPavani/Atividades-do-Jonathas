<?php
    //Funções - Parametros
    // Parametros Adicionais
    // Situação em que a função tem um parametro como certo,
    // porem, na chamada da função, são passados um numeros 
    //maior de argumentos

    #Exemplo
    function divisor($a){
        # Parametro A é obrigatorio
        # Porem, podem haver mais parametros
        $qtArgun = func_num_args();

        #Avaliar quantos argumentos foram passados
        // Neste código vamos nos limitar no maximo de 3 parametros
        switch($qtArgun){
            case '2':
                $x = func_get_arg(0);
                $y = func_get_arg(1);
                echo '<br>';
                echo 'A função recebeu dois argumentos. ';
                echo 'Apenas uma DIVISÃO' . '<br>';
                echo ($x/$y) .'<br>';
                break;

            case '3':
                $x = func_get_arg(0);
                $y = func_get_arg(1);
                $z = func_get_arg(2);
                echo '<br>';
                echo 'A função recebeu TRÊS argumentos' . '<br>';
                echo 'Apenas uma DIVISÇÃO e SOMA' . '<br>';
                echo ($x/$y) + $z . '<div>';
                break;

            default:
                echo '<br>';
                echo 'A função deve receber no máximo 3 args' . '<br>';
                echo 'ou pelo menos dois para ser executada' . '<br>';
                break;
        }
    }

    echo 'TESTE da função com UM parametro';
    divisor(10);
    echo '<hr>';

    echo 'TESTE de função com DOIS parametros';
    divisor(20, 10);
    echo '<hr>';

    echo 'TESTE de função com TRÊS parametros';
    divisor(20, 10, 30);
    echo '<hr>';


?>
