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
    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $freq = $_GET["freq"];
    $situacao="";
    $media= $nota1+$nota2/2; 
    if ($freq < 75){
        $situação = "Reprovado por falta";
    }else{
        $situação= $media >= 6;
        echo "Aprovado!!!";
    }
    echo "O nome do Aluno é ".$nome." ,a média deste aluno é. ".$media;
    ?>
</body>
</html>