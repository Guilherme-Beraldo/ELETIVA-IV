<?php

$valor = $_POST['number'];

function verificarNumero ($valor) {
    if ($valor >= 1)  {
        echo "O numero e positivo";
    } elseif ($valor <= -1) {
        echo "O numero e negativo";
    } else {
        echo "O numero e igual a zero";
    }
}

verificarNumero($valor);