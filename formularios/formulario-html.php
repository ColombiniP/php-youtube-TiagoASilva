<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro de Clientes</title>
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
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        form fieldset input {
            padding: 5px;
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
            <h1>Cadastro de Clientes</h1>
        </header>
        <main>
            <form action="processa-formulario.php" method="post">
                <fieldset>
                    <legend>Dados Pessoais</legend>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome: " required>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="seu@email.com" required>
                    <label for="estado">Estado:</label>
                    <select name="estado" id="estado">
                        <option value="">Selecione aqui</option>
                        <optgroup>
                            <option value="SP">São Paulo</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PR">Paraná</option>
                        </optgroup>
                    </select>
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" required>

                    <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </main>
    </div>
</body>
</html>