<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Comparações</h1>
    <?php
    $a = 1;
    $b = 3;
    $c = $a > $b;
    $c = $a >= $b;
    $c = $a < $b;
    $c = $a <= $b;
    $c = $a <> $b;

    # Comparações parecidas com Javascript: exemplo: '3' é igual à 3
    $c = $a != $b;
    $c = $a == $b;

    # Compara valores e tipos: exemplo: '3' é diferente de 3
    $c = $a === $b;
    $c = $a !== $b;

    $c = $a == 3 && $b == '3';
    $c = $a == 3 and $b == '3';

    $c = $a == 3 || $b == '3';
    $c = $a == 3 or $b == '3';

    $c = $a == 3 xor $b == '3';

    $c = $a >= 0 ? $a : $b;
    ?>
</div>
</body>
</html>