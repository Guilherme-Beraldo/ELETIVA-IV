<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos</title>
</head>
<body>
    <h2>Entre com os números:</h2>
    <form action="processar5.php" method="post">
        <?php for ($i = 1; $i <= 20; $i++): ?>
            <label for="num<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
            <input type="number" name="num[]<?php echo $i; ?>"><br><br>
        <?php endfor; ?>
        <input type="submit" value="Calcular Números">
    </form>
</body>
</html>