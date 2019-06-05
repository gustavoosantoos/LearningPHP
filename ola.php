<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Primeiro exemplo PHP</title>
    </head>
    <body>
        <h1>Aprendendo PHP - Hello world e variáveis básicas</h1>
        <?php

            //Variáveis comuns
            $numero = 1;
            $salario = 6800.30;
            $nome = "Gustavo";
            $casado = false;
            $casadoText = $casado ? "é" : "não é";

            echo "<p>Olá $nome, seu salário é: $salario e você $casadoText casado</p>";
            $n1 = 10;
            $n2 = 30;
            $soma = $n1 + $n2;
            $media = ($n1 + $n2) / 2;

            echo "<p>A soma é: $soma</p>";
            echo "<p>A subtração é ". ($n1 - $n2). "</p>";
            echo "<p>A multiplicação é ". ($n1 * $n2). "</p>";
            echo "<p>A divisão é ". ($n1 / $n2). "</p>";
            echo "<p>A média é $media</p>";
        ?>
    </body>
</html>