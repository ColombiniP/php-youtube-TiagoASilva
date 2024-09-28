<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="container">
        <header class="cabecalho">
            <nav class="menu-nav">
                <ul>
                    <li>Login</li>
                </ul>
            </nav>
            <div class="titulo">
                <h1>Login de Usuário</h1>
            </div>
        </header>
        <main class="principal">
            <div class="formulario">
                <form action="autenticador.php" method="post">
                    <fieldset class="login">
                        <div>
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="usuario" id="usuario" require>
                        </div>
                        <div>
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" require>
                        </div>
                        <input type="submit" value="Logar">
                    </fieldset>
                </form>
            </div>
        </main>
    </div>
</body>
</html>