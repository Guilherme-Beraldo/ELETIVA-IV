<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Numeros</title>
</head>
<body>
    <h2>Entre com os números:</h2>
    <form action="processar3.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="num<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
            <input type="number" name="num<?php echo $i; ?>"><br><br>
        <?php endfor; ?>
        <label for="mult<?php echo $i; ?>">Agora digite um valor para multiplicar estes números:</label>
            <input type="number" name="mult"><br><br>
        <input type="submit" value="Calcular Números">
    </form>
</body>
</html>