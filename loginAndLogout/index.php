<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION["usuario_logado"])) {
    header("Location: login.php");
}

if (isset($_GET["sair"])) {
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}

?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área logada</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="container">
        <header>
            <h1 style="text-align: center;">Bem-vindo a área restrita</h1>
        </header>
        <main>
            <div class="saudacao">
                <?php echo "Olá " . $_SESSION["usuario_logado"] . "!<br>"; ?>
            </div>
        </main>
        <footer>
            <nav>
                <ul>
                    <li>
                        <a href="index.php?sair=true" name="sair">Sair</a>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>
</body>

</html>