
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload simple de arquivos</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        header h1 {
            text-align: center;
        }

        form fieldset {
            /* display: flex;
            flex-direction: column;
            gap: 8px; */
        }

        form fieldset input {
            padding: 5px;
            background-color: #d9d9d9;
            border-radius: 3px;
            border: none;
            margin-right: 3px;
        }

        form fieldset button {
            padding: 5px;
            background-color: #d9d9d9;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="global">
        <header>
            <h1>Uploads de arquivos</h1>
        </header>
        <main>
            <form action="up-simples.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Dados Pessoais</legend>
                    <label>Arquivo:</label>
                        
                        <input type="file" name="arquivo-up">
                    <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </main>
    </div>
</body>
</html>