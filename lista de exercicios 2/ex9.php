<?php

$ano = $_POST['ano'];

define ("anoAtual", 2024);

function verificarIdade ($ano) {
    $idadePessoa = anoAtual - $ano;
    $dias = $idadePessoa * 365;
    $futuro = $idadePessoa + 1;

    echo "Você tem $idadePessoa anos, viveu $dias dias, e em 2025 você fará $futuro anos!";
}

verificarIdade($ano);

