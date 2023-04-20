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
$idade = 22;
$sexo = "f";
if($idade < 15 &&  $sexo== "f"){
    echo "É uma menina";
}
else{
    if($sexo == "m")
    echo "É um homem";
    else
    echo "É uma mulher";
    echo " e tem ". $idade." anos";
}
    ?>
</body>

</html>