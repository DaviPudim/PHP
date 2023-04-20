<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio Condicional</title>
</head>

<body>
    <?php
    $num = rand();
    $num *= 4;
    if ($num % 2 == 0) {
        echo "O numero é par";
    } else {
        echo "O numeor não é par";
    }
    ?>
</body>

</html>