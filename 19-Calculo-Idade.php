<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 9 - Calcule sua idade</title>
</head>

<body>
    <header><h1>Calcule sua idade</h1></header>

    <section>
        <form action="
            <?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <?php
                $anoAtual = date('Y');
                $anoNascimento = $_GET["anoNascimento"] ?? 0;
                $anoEscolha = $_GET["anoEscolha"] ?? $anoAtual;
                $erro = '';

                if(isset($_GET["anoNascimento"]) && isset($_GET["anoEscolha"]))
                {
                    if($anoNascimento > $anoAtual)
                    {
                        $erro = "O ano de nascimento não pode ser no futuro!";
                    }
                    elseif($anoEscolha < $anoNascimento)
                    {
                        $erro = "O ano escolhido não pode ser anterior ao seu ano de nascimento!";
                    }
                }
            ?>

            <label for="anoNascimento" >Em que ano você nasceu? </label>
            <input type="number" placeholder="Ex: 2000" name="anoNascimento" id="idanoNascimento" step="1" min="1900" max="<?= $anoAtual ?>" required value="<? $anoNascimento ?>">

            <label for="anoEscolha" >Quer saber a sua idade em que ano? (Atualmente estamos em <?= $anoAtual ?>) </label>
            <input type="number" placeholder="Ex: 2030" name="anoEscolha" id="idanoEscolha" step="1" min="<?= $anoNascimento ?>" required value="<? $anoEscolha ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <br>
        <?php
            if(isset($_GET["anoNascimento"]) && isset($_GET["anoEscolha"]))
            {
                if($erro)
                {
                    echo "<p style='color:red;'>$erro</p>";
                }
                else
                {
                    $idadeFutura = $anoEscolha - $anoNascimento;
                    echo "<p>Quem nasceu em $anoNascimento vai ter $idadeFutura anos em $anoEscolha.</p>";
                }
            }
            else
            {
                echo "<p>Preencha os campos acima para calcular sua idade.</p>";
            }
        ?>

    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>