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
    $fev = mktime(0, 0, 0, 2, 28, 2016);
    $mar = mktime(0, 30, 0, 3, 4, 2016);
    $hora = 3600;
    $dia = 24;
    echo  $fev . "<br>";
    echo  $mar . "<br>";
    $dif = $mar - $fev;
    echo  $dif. "<br>";
    $dias = $dif / $hora. "<br>";
    echo $dias;
    echo (int)$dias / $dia;
    ?>
</body>

</html>