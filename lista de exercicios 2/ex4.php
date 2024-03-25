<?php

$valor = $_POST['number'];

function tabuada($valor) {
    echo "<pre>";
    for ($i = 0; $i < 11; $i++) {
        $total = $valor * $i;
        echo "$valor * $i = $total\n";
    }
    echo "</pre>";
}

tabuada($valor);