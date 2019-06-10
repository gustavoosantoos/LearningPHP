<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Atribuções</h1>
    <?php
        function soma($a, $b) {
            return $a + $b;
        }

        function subtracao($a, $b) {
            return $a - $b;
        }

        echo soma(1 ,3);
        echo soma(10, -50);
    ?>
</div>
</body>
</html>