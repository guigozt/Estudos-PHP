<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 5 - Estrutura de Divisão</title>
</head>

<body>
    <header><h1>Anatomia de uma Divisão</h1></header>

    <section>
        <?php 
            $dividendo = $_GET['dividendo'] ?? 0;
            $divisor = $_GET['divisor'] ?? 1;
            //$result = $GET['result'] ?? null;
        ?>
        <form action="
            <?= $_SERVER['PHP_SELF']?>" method="GET" >

            <label>Número 1:</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">

            <label>Número 2:</label>
            <input type="number" name="divisor" id="iddivisor" min="1" value="<?=$divisor?>">

            <input type="submit" value="Dividir">
        </form>
    </section>


    <section id="resultado">
        <h2>Estrutura da Divisão</h2>

        <?php 
            $quociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td> <?= $dividendo ?> </td>
                <td> <?= $divisor ?> </td>
            </tr>
            <tr>
                <td> <?= $resto ?> </td>
                <td> <?= $quociente ?> </td>
            </tr>
        </table>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>