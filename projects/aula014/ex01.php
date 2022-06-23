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
    <div>
        <?php
         function teste(&$x)
        {
            $x += 2;
            echo" O valor de X é $x";
        }
        $a = 3;
        teste($a);
        echo"<br> O Valor de A e $a"
        
        ?>
    </div>
</body>
</html>