<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Atribuções</h1>
    <?php
        $a = 1;
        $b = 3;
        $c = $a + $b;
        $c += 5;
        $c /= 3;
        $c *= 1;
        $c -= 0;
        $c %= 2;
        $c++;
        $c--;

        $x = $_GET["x"];
        $preco = $x * 0.9;
        $aumento = $x + (($x * 10) / 100);
        echo "X é igual a $x <br/>";
        echo "X com 10% de desconto é: $preco <br/>";
        echo "X com 10% de aumento é $aumento";
    ?>
</div>
</body>
</html>