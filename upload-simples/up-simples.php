<?php

try {
    
    var_dump($_FILES)."<br>";
    $nameFile = $_FILES['arquivo-up']['name'];
    $tmpName = $_FILES['arquivo-up']['tmp_name'];
    var_dump($nameFile)."<br>";
    var_dump($tmpName)."<br>";

    $diretorioDestinoUpload = 'enviados/';
    if (is_dir($diretorioDestinoUpload)) {
        var_dump($diretorioDestinoUpload)."<br>";
        echo "É um diretório válido<br>";
    } else {
        throw new Exception("Diretório inexistente!");
    }

    $nome_arquivo = $diretorioDestinoUpload . basename($nameFile);
    var_dump($nome_arquivo)."<br>";

    if(!move_uploaded_file($tmpName,$nome_arquivo)) {
        throw new Exception("Não foi possível fazer o upload do arquivo!");
    } else {
        echo "Arquivo salvo na pasta";
    }


} catch (Throwable $e) {
    echo $e->getMessage();
}