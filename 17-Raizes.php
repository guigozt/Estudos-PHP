<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 7 - Raízes de um número</title>
</head>

<body>
    <header><h1>Informe um número</h1></header>

    <?php
        $numero = $_GET["numero"] ?? 1;
    ?>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="numero" >Número: </label>
            <input type="number" name="numero" id="idnumero" value="<? $numero ?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <br>
        <?php

            $raizQuadrada = sqrt($numero); //$numero ** (1/2)
            $raizCubica = pow($numero, 1/3); //$numero ** (1/3)

            echo "Analisando o <strong>número $numero</strong>, temos: <br><br>";
            echo "<ul><li>A sua Raíz Quadrada é: <strong>$raizQuadrada</strong> <br>";
            echo "<li>A sua Raíz Cúbica é: <strong>$raizCubica</strong> </li></ul>";
        ?>

    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>