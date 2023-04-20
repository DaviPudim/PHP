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
    $jan1 = mktime (0, 0, 0, 1, 31, 2014);
    $jan1_30 = mktime (0, 30, 0, 1, 31, 2014);
    $dif = $jan1_30 - $jan1;
    echo $dif;
    ?>
</body>

</html>