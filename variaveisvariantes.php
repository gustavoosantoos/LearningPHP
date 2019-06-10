<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Variáveis Variantes</h1>
    <?php
        $teste = "exemplo";
        $$teste = "xunda";
        $$$teste = "exemplo 2";

        echo $teste;
        echo $exemplo;
        echo $xunda;
    ?>
</div>
</body>
</html>