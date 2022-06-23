<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <Div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2;
        $m = ($n1+$n2 )/ 2;
        echo " <br>A soma entre $n1 e $n2 é igual a $s!";
        echo "<br> A subtração entre $n1 e $n2 é igual a ". ($n1-$n2);
        echo " <br>A multiplicação entre $n1 e $n2 é igual a ". ($n1*$n2);
        echo " <br>A divisão entre $n1 e $n2 é igual a " . ($n1/$n2);
        echo "<br> O modulo de $n1 e $n2 é igual a " . ($n1%$n2);
        echo " <br/> a media vale $m";
        ?>
    </Div>
</body>
</html>