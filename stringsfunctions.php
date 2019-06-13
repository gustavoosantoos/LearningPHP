<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Atribuções</h1>
    <?php
    $s = "Gustavo santos";
    echo strtolower($s) . "<br/>";
    echo strtoupper($s) . "<br/>";
    echo ucwords($s) . "<br/>";
    echo ucfirst($s) . "<br/>";
    echo strrev($s) . "<br/>";
    echo strpos($s, "santos") . "<br/>";
    echo stripos($s, "Santos") ."<br/>";
    echo substr_count($s, "santos") . "<br/>";


    echo str_pad($s, 30, "#", STR_PAD_LEFT) . "<br/>";
    echo str_pad($s, 30, "#", STR_PAD_RIGHT) . "<br/>";
    echo str_pad($s, 30, "#", STR_PAD_BOTH) . "<br/>";

    print_r(explode(" ", $s));
    echo "<br/>";

    echo strlen($s) . "<br/>";

    print_r(str_split($s, 3));
    echo "<br/>";

    echo str_word_count($s) . "<br/>";

    ?>
</div>
</body>
</html>