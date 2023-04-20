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
    $a = 10;
    $b = 3;
    $c = true;
    $d = "PHP";
    if ($a>$b || $c){
        echo "Mensagem 1<br>";
        if ($a==$b*3+$c)
        echo "Mensagem 2<br>";
        if ($c && $d)
        echo "Mensagem 3<br>";
    }
    ?>
</body>

</html>