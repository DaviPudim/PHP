<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Define o vetor de Alunos
    $alunos = [
        array("nome" => "Pedro", "media" => "5", "sexo" => "M"),
        array("nome" => "Jadir", "media" => "7", "sexo" => "ND"),
        array("nome" => "Maria", "media" => "8", "sexo" => "F")
    ];


    //Cria a tabela HTML
    echo "<table border = '1'>";
    echo "<tr><th>Nome</th><th>Média</th><th>Sexo</th><th>Situação</th></tr>";

    //Percorre o vetor de alunos e exibe os dados na tabela
    foreach ($alunos as $aluno) {

        $situacao = ($aluno["media"] >= 6) ? "Aprovado" : "Reprovado";
        echo "<tr><td>{$aluno["nome"]}</td><td>{$aluno["media"]}</td><td>{$aluno["sexo"]}</td><td>$situacao</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>