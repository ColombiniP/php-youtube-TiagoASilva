<?php  

try {

    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['estado']) || empty($_POST['cidade'])) {
        throw new Exception("Campo do formulário vázio") ;
        exit;
    }

    if (!is_string($_POST['nome'])) {
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        var_dump($_GET);
        var_dump($_SERVER['REQUEST_METHOD']);
    } else {
        var_dump($_POST);
        var_dump($_SERVER['REQUEST_METHOD']);
    }

} catch(Exception $e) {
    echo $e -> getMessage();
}