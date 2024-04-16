<?php

$num = $_POST["num"];

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

if (($num > 0) and ($num < 13)) {
    $num = $num - 1;
    echo "$meses[$num]";

} else {

    echo "Número Inválido";

}