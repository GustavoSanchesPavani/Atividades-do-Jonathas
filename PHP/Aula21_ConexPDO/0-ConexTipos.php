<?php

    /* Tipos de Conexão de BD em php
      Referencias

    No PHP existem duas formas comuns de conexão a um banco de dados:
    a) Extensão MySQLi (MySQLI improved) - Utiliza um paradigma declarativo
        esta extensão é uma opção recomendada para se conecta e interagir com o banco de dados MySQLi 
        usando PHP.

        Formas de conexão 
        
        I) Estabelecer a conexão 
        mysquli_connect() para conectar a um servidor MySQL
        especificando o HOST, NOME de usuario, SENHA e nome BANCO de 
        dados.

        II) Executar consultas e manipular dadso
        - mysqli_query() para executar comando SQL
        - mysqli_prepare() para preparação de daclarações
        - mysqli_fetch_assoc()ou mysqli_fethc_object para
        recuperar e manipular dados
        - mysqli_close() para fechar conexão

    b) Exentesão PDO (PHP Data Objetcs) - Ultiliza um paradigma OO. 
        Para uma solução mais generica que suporte varios banco de dados;
        como MySQLI, PostgreSQL, SQLite, Oracle, entre outros; é mais adequado
        O PDO oferece uma camada de abstração que permite a conexão com 
        diferentes SGBDs, oferencendo uma iterface consistente para iteragir
        com este

        I) Estabelecer uma conexão
        Ultiliza-se uma classe PDO (com declaração new) para cirar um 
        objeto de conexão, passando o DSN (Data s Source Name) que 
        contém as informaçoes de BD: DRIVER, HOST, Nome BD, USUÁRIO
        e a SENHA.

        II) Executar consultas e manipular dados
        - Método query() do objeto PDO para executar a consulta SQL 
        - Método fetch() e fetchColumn() para recuparar os resultados. 
        - Atribuir o NULL ao objeto PDO para fehcar a conexão. Emp

    */



?>