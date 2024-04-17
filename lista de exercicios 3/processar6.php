<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST["preco"];// Aqui você tem o array de valores
    $nome = $_POST ["nome"]; // Aqui você tem o array de nomes
}

for ($i = 0; $i < 5; $i++) {
    // Criando o produto com um nome e preço cada produto sera um array com nome e preco dentro
    $produtos[] = array(
        'nome' => $nome[$i],
        'preco' => $preco[$i]
    );
}

function ExibirPrecos ($produtos) {
    $qtd50 = 0;
    $produtosMedio = array();
    $media = 0;
    $qtdMedia = 0;

    foreach($produtos as $produto) {
        if ($produto['preco'] < 50) {
            $qtd50++;
        }

        if(($produto['preco'] >= 50) and ($produto['preco'] <= 100)) {
            $produtosMedio[] = $produto['nome'];
        }

        if ($produto['preco'] > 100) {
            $media += $produto['preco'];
            $qtdMedia++;
        }
    }

    $resultado = $media / $qtdMedia;
    
    echo "A quantidade de produtos com preços inferiores a 50,00 é de: $qtd50 <br>";
    echo "Os produtos com o valor entre 50,00 e 100,00 são: " . implode(", ", $produtosMedio) . "<br>";
    echo "A média de preço dos produtos com valor acima de 100,00 é de : $resultado";
}

ExibirPrecos($produtos);


// Exibindo os produtos
// foreach ($produtos as $produto) {
    // echo "Nome: " . $produto['nome'] . ", Preço: " . $produto['preco'] . "<br>";
// }