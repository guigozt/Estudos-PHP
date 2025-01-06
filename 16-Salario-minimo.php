<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 6 - Salário Mínimo</title>
</head>

<body>
    <header><h1>Informe o seu salário</h1></header>

    <?php 
        $salario = $_GET["salario"] ?? 1417;
    ?>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="salario" >Salário (R$): </label>
            <input type="number" name="salario" id="idsalario" value="<? $salario ?>">

            <input type="submit" value="Verificar">
        </form>
    </section>

    <section id="resultado">
        <?php 
            $salarioMinimo = 1417;

            $verificarSalario = floor($salario / $salarioMinimo); //função floor para arredondar o valor para o menor numer inteiro
            $adicionaisSalario = $salario - $salarioMinimo;

            echo "Quem recebe o salário de R$ ". number_format($salario, 2, ',', '.')." ganha $verificarSalario salário(s) mínimo + R$ ". number_format($adicionaisSalario, 2,',', '.');
        ?>

    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>