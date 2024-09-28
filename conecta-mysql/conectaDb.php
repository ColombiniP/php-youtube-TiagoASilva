<?php

try {
    // data source nome
    $dsn = "mysql:host=localhost;dbname=sakila";
    $user = "root";
    $passwd = "My_passwd_root@2024";

    // PHP data object
    $conexao = new PDO($dsn,$user,$passwd);
    
    $stmt = $conexao->prepare("SELECT * FROM film LIMIT 10");
    $stmt->execute();

    // TODO: VER = OPERADOR DE RESOLUÇÃO DE ESCOPO(->)

} catch (Exception $e) {
    echo $e->getMessage();
    // echo "<hr>";
    // var_dump($e->getTrace());
}