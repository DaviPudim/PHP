<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>

<body>
    <?php
    $busca = "nome";
    $troca = "Marinalva";
    $frase =  "E aí, nome!";
    $msg = str_replace($busca, $troca, $frase);
    echo $msg
    ?>
</body>

</html>