<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 11 - Calculadora de Tempo</title>
</head>

<body>
    <header><h1>Calculadora de Tempo</h1></header>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <?php
                $segundos = $_GET['segundos'] ?? 0;
            ?>

            <label for="segundos" >Qual é o total de segundos? </label>
            <input type="number" placeholder="Ex: 10" name="segundos" id="idsegundos" step="1" min="0" required value="<? $segundos ?>">

            <input type="submit" value="Calcular">
        </form>
    </section>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <br>

        <?php
            $semanaEmSegundos = 604800;
            $diaEmSegundos = 86400;
            $horaEmSegundos = 3600;
            $minutoEmSegundos = 60;
            
            //Descobrir Semana em Segundos
            $semana = floor($segundos / $semanaEmSegundos);
            $resto = $segundos % $semanaEmSegundos;
            //Descobrir Dia em Segundos
            $dia = floor($resto / $diaEmSegundos);
            $resto = $resto % $diaEmSegundos;
            //Descobrir Hora em Segundos
            $hora = floor($resto / $horaEmSegundos);
            $resto = $resto % $horaEmSegundos;
            //Descobrir Minutos em Segundos
            $minuto = floor($resto / $minutoEmSegundos);
            $resto = $resto % $minutoEmSegundos; //Resto de segundos
        ?>

        <p>Analisando o valor que você digitou,<strong> <?= number_format($segundos, 0, '.', '.') ?> segundos </strong>equivalem a um total de: </p>
        <ul>
            <li><strong><?= $semana ?></strong> Semana(s)</li>
            <li><strong><?= $dia ?></strong> Dia(s)</li>
            <li><strong><?= $hora ?></strong> Hora(s)</li>
            <li><strong><?= $minuto ?></strong> Minuto(s)</li>
            <li><strong><?= $resto ?></strong> Segundo(s)</li>
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