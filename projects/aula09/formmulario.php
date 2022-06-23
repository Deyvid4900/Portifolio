<!DOCTYPE html>
<html lang="en">
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
    $nome = isset($_GET["cname"])?$_GET["cname"]:"não definido" ;
    $ida = isset($_GET["cida"])?$_GET["cida"]:"não definido";
    $pais = isset($_GET["cpais"])?$_GET["cpais"]:"não definido";
    $i = date("Y") - $ida;

    if ($i>=18 and $pais=="Brasil") {
    echo "Você pode dirigir no Brasil <br>";
    echo "Você pode Votar no Brasil ";
    }
    else
    {
    echo "Você NÂO pode dirigir no Brasil <br>";
    echo "Você NÂO pode Votar no Brasil";
    }
    

    ?>
    </Div>
</body>
</html>