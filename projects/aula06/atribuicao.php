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
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior e " . --$atual; //decremento


        
        ?>

    </div>
</body>
</html>