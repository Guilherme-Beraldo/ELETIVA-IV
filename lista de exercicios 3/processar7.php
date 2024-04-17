<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST["nota"];
    $nota2 = $_POST["nota2"];
    $nome = $_POST ["nome"]; 
}

$alunos = array();

for ($i = 0; $i <= 9; $i++) {
    $alunos[] = array (
        'nome' => $nome[$i],
        'nota' => $nota[$i],
        'nota2' => $nota2[$i],
        'media' => null // a media sera atribuida depois
    );
}

function calcularMedia(&$alunos) {
    foreach($alunos as &$aluno) {
        $soma = $aluno['nota'] + $aluno['nota2'];
        $media = $soma / 2;
        $aluno['media'] = $media;
    }
}

calcularMedia($alunos);

$aprovados = array();
$reprovados = array();

foreach ($alunos as $aluno) {
    if ($aluno['media'] >= 6) {
        $aprovados[] = $aluno['nome'];
    } else {
        $reprovados[] = $aluno['nome'];
    }
}

echo "Alunos Aprovados: <br>";
foreach ($aprovados as $nome_aluno) {
    echo $nome_aluno . "<br>";
}

echo "<br>";

echo "Alunos Reprovados: <br>";
foreach ($reprovados as $nome_aluno) {
    echo $nome_aluno . "<br>";
}