<!DOCTYPE html>
<?php require 'conectaDb.php' ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes Sakila DB</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>FILME ID</th>
                    <th>NOME</th>
                    <th>ANO LANÇAMENTO</th>
                    <th>DESCRIÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <?php while($filme = $stmt->fetchObject()): ?>
                <tr>
                    <td><?= $filme->film_id; ?></td>
                    <td><?= $filme->title; ?></td>
                    <td><?= $filme->release_year; ?></td>
                    <td><?= $filme->description; ?></td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>