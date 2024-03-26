<?php

$metros = $_POST['number'];

function tintas ($metros) {
    $qtdlitros = $metros / 3;
    $qtdlatas = ceil($qtdlitros / 18);
    $valortotal = $qtdlatas * 80;

    return [$qtdlatas, $valortotal];
}

$resultado = tintas($metros);

echo "Foram usadas $resultado[0] lata(s), em um valor de R$$resultado[1],00";

