<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <h1>Aprendendo PHP - Atribuções</h1>
    <?php
    $valor = isset($_GET['valor']) ? $_GET["valor"] : "Não informado";
    echo "$valor";
    ?>

    <form method="get" action="forms.php">
        Valor: <input type="number" name="valor">
        <input type="submit" value="Calcular">
    </form>
</div>
</body>
</html>