<?php
    //Loops em PHP
    # Laço for
    # Permite executar um bloco de codigo em um determinado
    # numero de vezes. É contiriu==tuido de três parÂmetros:
    # 1.Valor inicial numerico - É utilizado paraa controlar o numero de "loops"
    # 2. Condição = Avalia o contador para o encerramento do "LOOP"
    # 3. Incremento ou decremento - Altera o valor do contador.

    #Note que a variavel e criada e incializada dentro do laço
    #Exemplo

    for($x = 1; $x<10; $x++){
        echo "Exemplo 1 - Valor de x = ". $x ."<br>"; 
    }
    echo "<br>";

    #Exemplo 2 - Redução de codigo se tivewr uma unica instrução
    for($x = 1; $x < 10; $x++)
        echo"Exemplo 1 - Valor de x = ". $x ."<br>"; 
    echo "<br>";

    #Exemplo 3 
    //Existem assinaturas diferenciadas do laço FOR
    //Verememos uma delas
    $z = 1;
    for(; $z<10;){
        echo "Exemplo 3 - Valor de z = ". $z. "<br>";
        $z++;
    }
    echo "<hr>";

    #Exemplo 4
    #Array
    $nomes = ['Mari', 'Agda', 'Lena'];
    for($i = 0; $i < sizeof($nomes); $i++){
        echo "Exemplo 4 - Nome " . $nomes[$i] . "<br>";
    }
    echo "<hr>";
?>