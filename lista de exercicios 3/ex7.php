<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média da Classe</title>
</head>
<body>
    <h2>Entre com os dados dos alunos:</h2>
    <form action="processar7.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="nome<?php echo $i; ?>">Nome do Aluno <?php echo $i; ?>:</label>
            <input type="text" name="nome[]"><br><br>
            <label for="nota">Nota 1:</label>
            <input type="text" name="nota[]"><br>
            <label for="nota">Nota 2:</label>
            <input type="text" name="nota2[]"><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>