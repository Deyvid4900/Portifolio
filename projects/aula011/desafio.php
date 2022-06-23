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
        $a = $_GET["f"];
        $b = $_GET["in"];
        $c = $_GET["i"];
        if ($c < $a) {
            while($c <= $a){
                echo "$c<b>r";
                $c=$c+$b;
                
            }
        }else{
            while($c > $a){
                echo "$c <br>";
                $c=$c+-$b;
        }
    }
        
    

        ?>
    </div>
</body>
</html>