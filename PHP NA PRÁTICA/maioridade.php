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
    $amaliaIdade = 17;
    $joaquimIdade = 18;

    if ($amaliaIdade > $joaquimIdade) {
        echo "Amália é mais velha do que Joaquim";
    } elseif ($amaliaIdade < $joaquimIdade) {
        echo "Joaquim é mais velho do que Amália";
    } else {
        echo "Amália e Joaquim têm a mesma idade";
    }
    ?>
</body>

</html>