<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média da Classe</title>
</head>
<body>
    <h2>Entre com os dados dos alunos:</h2>
    <form action="processar1.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="nome<?php echo $i; ?>">Nome do Aluno <?php echo $i; ?>:</label>
            <input type="text" name="nome<?php echo $i; ?>"><br>
            <label for="nota<?php echo $i; ?>">Nota do Aluno <?php echo $i; ?>:</label>
            <input type="text" name="nota<?php echo $i; ?>"><br><br>
        <?php endfor; ?>
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>