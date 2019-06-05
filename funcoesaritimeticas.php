<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Funções Aritiméticas</h1>
    <?php
        $x = $_GET["x"];
        $y = $_GET["y"];

        echo "<h3>Valores recebidos: $x e $y</h3>";
        echo "O valor absoluto de X é: " .abs($x). "<br/>";
        echo "O valor valor de $x<sup>$y</sup> é:" .pow($x, $y). "<br/>";
        echo "A raíz quadrada de x é: " .sqrt($x). "<br/>";
        echo "O arredondamento de x é:" .round($x). "<br/>";
        echo "O arredondamento de y é:" .round($y). "<br/>";
        echo "O teto de y é: " .ceil($y). "<br/>";
        echo "O chão de y é: " .floor($y). "<br/>";
        echo "O valor inteiro de y é: " .intval($y). "<br/>";
        echo "O valor de y em moeda é: R$" .number_format($y, 2). "<br/>";
    ?>
</div>
</body>
</html>