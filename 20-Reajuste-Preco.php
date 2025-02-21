<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 10 - Reajustador de Preço</title>
</head>

<body>
    <header><h1>Reajustador de Preço</h1></header>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <?php
                $precoProduto = $_REQUEST["precoProduto"] ?? 0;
                $porcentagem = $_REQUEST["porcentagem"] ?? 0;
            ?>

            <label for="precoProduto" >Preço do Produto: </label>
            <input type="number" placeholder="Ex: 1.518,00" name="precoProduto" id="idaprecoProduto" step="0.01" min="0.10" required value="<? $precoProduto ?>">

            <label for="porcentagem">Qual será o percentual do reajuste? (<strong><span id="p">?</span>%</strong>) </label>
            <input type="range" name="porcentagem" id="idporcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porcentagem ?>">

            <input type="submit" value="Reajustar">
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <br>

        <?php
            $valorPorcento = $porcentagem / 100;
            $reajuste =($precoProduto * $valorPorcento) + $precoProduto;
        ?>

        <p>O produto que custava R$ <?= number_format($precoProduto, 2, ',','.') ?>, com <?=$porcentagem?>% de aumento vai passar a custar R$ <?= number_format($reajuste, 2, ',','.') ?> a partir de agora!</p>

    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>

    <script>
        mudaValor()
        
        function mudaValor()
        {
            p.innerText = idporcentagem.value;
        }
    </script>
    
</body>
</html>