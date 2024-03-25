<?php

$valores = [
    isset($_POST['number']) ? $_POST['number'] : null,
    isset($_POST['number2']) ? $_POST['number2'] : null,
    isset($_POST['number3']) ? $_POST['number3'] : null,
    isset($_POST['number4']) ? $_POST['number4'] : null,
    isset($_POST['number5']) ? $_POST['number5'] : null,
    isset($_POST['number6']) ? $_POST['number6'] : null,
    isset($_POST['number7']) ? $_POST['number7'] : null
];

function menorValor($valores) {
    if (count($valores) == 0) {
        echo "Nenhum valor fornecido.";
        return;
    }
    $posicao = 0;
    $menorValor = $valores[0];
    foreach ($valores as $key => $valor) {
        if($valor < $menorValor) {
            $menorValor = $valor;
            $posicao = $key;
        }
    }
    echo "O menor valor é: " . $menorValor . " na posição: ". $posicao +1;
}

menorValor($valores);