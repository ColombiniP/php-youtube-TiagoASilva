<?php
session_start();

try {
    $usuario = "paschoal"; 
    $password = "1234";

    $usuario_digitado = $_POST["usuario"];
    $password_digitado = $_POST["password"];


    if($usuario_digitado === $usuario) {
        if ($password_digitado === $password) {
            $_SESSION["usuario_logado"] = $usuario_digitado;
            header("Location: index.php?logado=true");
        } else {
            header("Location: login.php?falhou=true");
        }
    } else {
        header("Location: login.php?falhou=true");
    }




} catch (Exception $e) {
    echo $e->getMessage();
}