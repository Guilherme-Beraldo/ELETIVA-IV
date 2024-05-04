<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

function calcularImc ($peso, $altura) {
   $imc = $peso / ($altura * $altura);

   if ($imc < 18.5) {
     echo "Você esta abaixo do peso ideal para sua altura";
   } elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Você esta com o peso ideal para a sua altura";
   } elseif ($imc >= 25 && $imc < 29.9) {
    echo "Você esta acima do peso ideal para a sua altura";
   } elseif ($imc >= 30 && $imc < 34.9) {
    echo "Você esta com obesidade grau 1";
   }
   elseif ($imc >= 35 && $imc < 39.9) {
    echo "Você esta com obesidade grau 2";
   }
   elseif ($imc >= 40) {
    echo "Você esta com obesidade grau 3, recomendamos consultar um nutricionista!";
   } else {
    echo "números digitados inválidos";
   }
}


calcularImc($peso, $altura);

