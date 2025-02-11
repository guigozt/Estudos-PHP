<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 8 - Médias Aritméticas</title>
</head>

<body>
    <header><h1>Médias Aritméticas</h1></header>

    <?php
        $value1 = $_GET["value1"] ?? 0;
        $value2 = $_GET["value2"] ?? 0;
        $peso1 = intval($_GET["peso1"] ?? 1);
        $peso2 = intval($_GET["peso2"] ?? 1);
    ?>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="value1" >1º Valor: </label>
            <input type="number" name="value1" id="idvalue1" step="0.1" required value="<? $value1 ?>">

            <label for="peso1" >1º Peso: </label>
            <input type="number" name="peso1" id="idpeso1" value="<? $peso1 ?>">

            <label for="value2" >2º Valor: </label>
            <input type="number" name="value2" id="idvalue2" step="0.1" required value="<? $value2 ?>">

            <label for="peso2" >2º Peso: </label>
            <input type="number" name="peso2" id="idpeso2" value="<? $peso2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <br>
        <?php
            $mediaSimples = ($value1 + $value2) / 2;

            $somaPesos = $peso1 + $peso2;
            $mediaPonderada = (($value1 * $peso1) + ($value2 + $peso2)) / $somaPesos;
            
            echo "Analisando os valores <strong>$value1</strong> e <strong>$value2</strong> temos: <br>";
            echo "<ul><li>A <strong>Média Simples</strong> entre os valores é de: $mediaSimples </li><br>";
            echo "<li>A <strong>Média Ponderada</strong> entre os valores é de: $mediaPonderada </li></ul>";
        ?>

    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>