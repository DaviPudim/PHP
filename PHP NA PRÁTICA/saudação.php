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
    $horaAtual = date("H:i:s");
    $periodoDia = "";
    
    // Verifica o período do dia
    if (date("H") >= 6 && date("H") < 12) {
        $periodoDia = "Bom dia!";
        $cor = "green";
    } elseif (date("H") >= 12 && date("H") < 18) {
        $periodoDia = "Boa tarde";
        $cor = "red";
    } else {
        $periodoDia = "Boa noite";
        $cor = "blue";
    }
    
    echo "<p style='color: $cor'>A hora atual é: $horaAtual</p>";
    echo "<p style='color: $cor'>Oi, $periodoDia!</p>";
    ?>
</body>
</html>
