<?php

$alunos = array();

// Loop para recuperar os dados dos alunos enviados pelo formulário HTML
for ($i = 1; $i <= 10; $i++) {
    $nome = $_POST["nome$i"];
    $nota = $_POST["nota$i"];
    $alunos[$nome] = $nota;
}

function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}

// Calculando a média das notas
$notas = array_values($alunos);
$media = calcularMedia($notas);

// Encontrando o aluno com a maior nota
$melhorNota = max($alunos);
$melhorAluno = array_search($melhorNota, $alunos);

// Mostrando a média e o melhor aluno
echo "A média da classe é: $media<br>";
echo "O aluno com a maior nota é: $melhorAluno com a nota $melhorNota<br>";