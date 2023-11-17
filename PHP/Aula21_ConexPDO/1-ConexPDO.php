<?php

// Fazer rapidamente uma conexão e leitura de dados de BD

$gestor = new PDO("mysql:host=localhost; dbname=banco_teste_sanches; charset=utf8", "root");
# DSN = Data Source Nmae (Servidor MySQL)
    #mysql:host:localhos;
    #dbname    =Base de Dados (banco_teste_sanches)
    #charset   =Opções não obrigatorias
# Usuários = "root"
# Password = null,
# $options = null,

# Uma variável para conter os dados de tabela
$dados = $gestor ->query("SELECT * FROM fornecedores");

# Um método FETCH do PDO de busca de todos os dados armazenados
# Assosicado a um ARRAY.
$fornecedores = $dados->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($fornecedores);
?>