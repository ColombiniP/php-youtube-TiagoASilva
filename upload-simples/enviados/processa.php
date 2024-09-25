<?php

try {

// definindo a pasta destino
$diretorio = 'file_up/';

// validando o diretório de destino
if (!is_dir($diretorio)) {
    throw new Exception("Diretório inexistente!");
} 

// nome do arquivo
$nome_arquivo_upload = $diretorio . $_FILES['file-upload']['name'];

// movendo o arquivo para pasta
$tmp_name = $_FILES['file-upload']['tmp_name'];

if (move_uploaded_file($tmp_name,$nome_arquivo_upload)) {
    echo "Arquivo Enviado";
} else {
    throw new Exception("Erro ao enviar arquivo");
}

} catch (Throwable $e) {
    echo $e->getMessage();
}