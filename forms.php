<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>

    <?php
    $texto = isset($_GET['text']) ? $_GET["text"] : "Não informado";
    $tamanho = isset($_GET['tamanho']) ? $_GET["tamanho"] : 12;
    $cor = isset($_GET['cor']) ? $_GET["cor"] : "#000000";
    ?>

    <style>
        p {
            color: <?= $cor ?>;
            font-size: <?= $tamanho ?>pt;
        }
    </style>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Atribuções</h1>

    <form method="get" action="forms.php">
        Text: <input type="text" name="text">
        Cor: <input type="color" name="cor">
        Tamanho: <input type="number" name="tamanho">
        <input type="submit" value="Calcular">
    </form>

    <p>
        <?= $texto ?>
    </p>
</div>
</body>
</html>