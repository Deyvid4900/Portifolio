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
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto e R$". number_format($preco,2);
            $preco -= ($preco*10/100);
            echo "<br>  O preço do produto com 10% de desconto será R$" . number_format($preco,2);


        ?>
    </div>
</body>
</html>