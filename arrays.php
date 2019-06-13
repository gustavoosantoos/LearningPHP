<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Arrays</h1>

    <?php
        $x = array(1, 4, 10, 3, 0, 9);
        $count = count($x);

        print($count);
        echo "<br/><br/>";

        print_r($x);
        echo "<br/><br/>";

        var_dump($x);
        echo "<br/><br/>";

        var_export($x);
    ?>
</div>
</body>
</html>