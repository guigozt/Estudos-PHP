<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 12 - Caixa Eletrônico</title>
    <style>
        .nota{
            height: 50px;
            margin: 6px;
        }
    </style>
</head>

<body>
    <header><h1>Caixa Eletrônico</h1></header>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <?php
                $valorSaque = $_REQUEST["valorSaque"] ?? 0;
            ?>

            <label for="valorSaque" >Qual valor você deseja sacar? (R$)</label>
            <input type="number" placeholder="Ex: 10,00" name="valorSaque" id="idvalorSaque" step="5" min="5" required value="<? $valorSaque ?>">
            <p style="font-size: 0.8em;">Notas disponíveis: R$100, R$50, R$10, R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </section>

    <section id="resultado">
        <h2>Saque de R$<?=number_format($valorSaque, 2, ',','.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <?php
            $nota100 = 100;
            $nota50 = 50;
            $nota10 = 10;
            $nota5 = 5;
            $resto = $valorSaque;
            //Saque de 100
            $valorRecebido100 = floor($valorSaque / $nota100);
            $resto %= $nota100;
            //Saque de 50
            $valorRecebido50 = floor($resto / $nota50);
            $resto %= $nota50;
            //Saque de 10
            $valorRecebido10 = floor($resto / $nota10);
            $resto %= $nota10;
            //Saque de 5
            $valorRecebido5 = floor($resto / $nota5);
            $resto %= $nota5;
        ?>
        <ul>
            <li><img src="Imagens/100-reais.jpg" alt="Nota100" class="nota"> x<?=$valorRecebido100?></li>
            <li><img src="Imagens/50-reais.jpg" alt="Nota50" class="nota"> x<?= $valorRecebido50?></li>
            <li><img src="Imagens/10-reais.jpg" alt="Nota10" class="nota"> x<?= $valorRecebido10?></li>
            <li><img src="Imagens/5-reais.jpg" alt="Nota5" class="nota"> x<?= $valorRecebido5?></li>
        </ul>
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