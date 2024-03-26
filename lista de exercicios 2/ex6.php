<?php

$valor1 = $_POST['number'];
$valor2 = $_POST['number2'];

function ordemCrescente($valor1, $valor2) {
    if ($valor1 == $valor2) {
        $resultado = "Números iguais: $valor1";
    } else {
        $resultado = $valor1 > $valor2 ? "$valor2, $valor1" : "$valor1, $valor2";
    }

    return $resultado;
}

$resultado = ordemCrescente($valor1, $valor2);

echo "$resultado";