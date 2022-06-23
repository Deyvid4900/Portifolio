<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Aula_PHP_ </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo " A raiz de $valor é igual a " . number_format($rq,3);
    ?>
    <br>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>