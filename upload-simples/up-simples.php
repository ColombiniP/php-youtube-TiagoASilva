<?php
// date_default_timezone_get('America/Sao_Paulo');

try {

    $diretorioDestinoUpload = 'enviados/';

    // verificando se diretório é válido
    if (!is_dir($diretorioDestinoUpload)) {
        throw new Exception("Diretório inexistente!");
    }

    // verificando se arquivo é um .exe
    if(is_executable($_FILES['arquivo-up']['tmp_name'])) {
        throw new Exception("Arquivos executáveis não permitido.");
    }

    // obtemos as extenção do arquivo
    $exe_extensao = pathinfo($_FILES['arquivo-up']['name'],PATHINFO_EXTENSION);

    // criamos um nome único para o arquivo
    $nome_unico = uniqid("recebido_".date("d.m.y_H:i")."_").".".$exe_extensao;
        // recebido_28.09.24_14:24_66f8119b1f447.php
     
    // enviando para o servidor
    $nome_arquivo_servidor = $diretorioDestinoUpload . $nome_unico;

    // pegando o arquivo tmp
    $tmpName = $_FILES['arquivo-up']['tmp_name'];

    if(!move_uploaded_file($tmpName,$nome_arquivo_servidor)) {
        // tratendo os códigos de erros em file['file']['error']
        switch($_FILES['arquivo-up']['error']) {
            case 1 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.");
                break;
            case 2 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.");
                break;
            case 3 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("O upload do arquivo foi feito parcialmente.");
                break;
            case 4 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("Nenhum arquivo foi enviado.");
                break;           
            case 6 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("Pasta temporária ausente.");
                break;        
            case 7 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("Falha ao escrever o arquivo no disco.");
                break;    
            case 8 :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new 
                Exception("Uma extensão do PHP interrompeu o upload do arquivo. ");
                break;
            default :
                echo "Error : " . $_FILES['arquivo-up']['error']."<br>";
                throw new Exception("Não foi possível fazer o upload do arquivo!");    
        }
    } else {
        echo "Arquivo salvo na pasta";
    }

} catch (Throwable $e) {
    echo $e->getMessage();
}