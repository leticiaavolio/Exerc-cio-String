<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <head>
        <h2>String</h2>
    </head>
    <form method="POST">
        <label for="frase">Digite uma frase</label>
        <input type="text" id="frase" name="frase" required>
        <input type="submit">
    </form>
    <?php
        $frase = $_POST["frase"];
        echo $frase;

        $qtdCaracter = strlen($frase);
        echo "<p>A quantidade de caracteres presentes na frase é: ".$qtdCaracter.";</p><br>";

        $inverso = strrev($frase);
        echo "<p>O inverso da frase é: ".$inverso.";</p><br>";

        $comparar = strcasecmp($frase, $inverso);

        if ($comparar == 0) {
            echo "<p>A frase é um palíndromo</p>";
        }
        else {
            echo "<p>A frase não é um palíndromo</p>";
        }

    ?>
</body>
</html>