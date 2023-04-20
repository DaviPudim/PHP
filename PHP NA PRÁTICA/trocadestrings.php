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
    $mensagem = "Comentários do Facebook não estão disponíveis no Google";

    // Substitui a palavra "Facebook" por "Google" e armazena na variável $mensagem_modificada
    $mensagem_modificada = str_replace("Facebook", "Google", $mensagem);

    // Substitui a palavra "Google" por "Facebook" na variável $mensagem_modificada e armazena o resultado na mesma variável
    $mensagem_modificada = str_replace("Google", "Facebook", $mensagem_modificada);

    echo $mensagem_modificada;
    ?>
</body>

</html>