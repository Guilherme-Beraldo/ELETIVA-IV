<?php

$valores = array();

$mult = $_POST["mult"];

for ($i = 1; $i <= 10; $i++) {
    $valor = $_POST["num$i"];
    $valores[$i] = $valor;
    $resultado = $valores[$i] * $mult;
    echo "$valores[$i] x $mult = $resultado <br>";
}

