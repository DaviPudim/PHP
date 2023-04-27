<?php

// Definindo os dados dos alunos em um vetor bidimensional
$alunos = [
    ["indice" => 0, "nome" => "Marcelo", "nota1" => 8, "nota2" => 6],
    ["indice" => 1, "nome" => "Mário", "nota1" => 2, "nota2" => 7],
    ["indice" => 2, "nome" => "Leonardo", "nota1" => 5, "nota2" => 4],
    ["indice" => 3, "nome" => "José", "nota1" => 6, "nota2" => 9]
];

// Calculando a média e a situação de cada aluno
$media = [];
$situacao = [];
foreach ($alunos as $aluno) {
    $media[] = ($aluno["nota1"] + $aluno["nota2"]) / 2;
    $situacao[] = $media[count($media) - 1] >= 6 ? "Aprovado" : "Reprovado";
}

// Exibindo os dados em uma tabela HTML
echo "<table border = 1>";
echo "<tr><th>Índice</th><th>Nome</th><th>Nota 1</th><th>Nota 2</th><th>Média</th><th>Situação</th></tr>";
foreach ($alunos as $i => $aluno) {
    echo "<tr>";
    echo "<td>" . $aluno["indice"] . "</td>";
    echo "<td>" . $aluno["nome"] . "</td>";
    echo "<td>" . $aluno["nota1"] . "</td>";
    echo "<td>" . $aluno["nota2"] . "</td>";
    echo "<td style='color: " . ($media[$i] >= 6 ? "blue" : "red") . ";'>" . number_format($media[$i], 1, ",", ".") . "</td>";
    echo "<td style='color: " . ($media[$i] >= 6 ? "blue" : "red") . ";'>" . $situacao[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

