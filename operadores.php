<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Operadores Aritiméticos</h1>
        <?php
        $n1 = 10;
        $n2 = 30;
        $soma = $n1 + $n2;
        $media = ($n1 + $n2) / 2;

        echo "<p>A soma é: $soma</p>";
        echo "<p>A subtração é " . ($n1 - $n2) . "</p>";
        echo "<p>A multiplicação é " . ($n1 * $n2) . "</p>";
        echo "<p>A divisão é " . ($n1 / $n2) . "</p>";
        echo "<p>A média é $media</p>";

        $a = $_GET["a"];
        $b = $_GET["b"];

        echo "<p>A soma passada por parâmetros é: ". ($a + $b) . "</p>";
    ?>
</div>
</body>
</html>