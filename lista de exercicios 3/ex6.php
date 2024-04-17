<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h2>Entre com os produtos e preços:</h2>
    <form action="processar6.php" method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label for="nome">Nome do Produto <?php echo $i; ?>:</label>
            <input type="text" name="nome[]"><br>
            <label for="preco">Preço do Produto <?php echo $i; ?>:</label>
            <input type="number" name="preco[]"><br><br>
        <?php endfor; ?>
        <input type="submit" value= "Enviar">
    </form>
</body>
</html>