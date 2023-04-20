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
    $idade = 30;
    if($idade < 10){
        echo "Criança";
    }
    elseif ($idade < 20){
        echo "Jovem";
    }
    elseif ($idade < 60){
        echo "Adulto";
    }
    else{
        echo"Idoso";
    }
    ?>
</body>

</html>