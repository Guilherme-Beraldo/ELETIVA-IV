
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valores = $_POST["num"]; // Aqui você tem o array de valores
}

function Primos ($valores) {
    $primos = array();
    foreach ($valores as $num) {

        $divisores = 0;
        
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $divisores++;
            }
        }

        if ($divisores == 2) {
            $primos[] = $num;
        }
    }

    return $primos;
}

$resultado = Primos($valores);

echo "Números primos: ";
foreach ($resultado as $primo) {
    echo $primo . ", ";
}