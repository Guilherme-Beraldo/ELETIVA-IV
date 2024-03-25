
<?php

$valor1 = $_POST['number'];
$valor2 = $_POST['number2'];

function calcularSoma($valor1, $valor2) {

    if($valor1 == $valor2) {
        $soma = ($valor1 + $valor2) * 3;
        echo $soma;
    } else {
        $soma = $valor1 + $valor2;
        echo $soma;
    }
    
}

calcularSoma($valor1, $valor2);

