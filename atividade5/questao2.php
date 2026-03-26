<?php

if (!isset($_GET["numero"])) {
    $mensagem = "Digite um número na outra pagina";
} else {

    $numero = $_GET["numero"];

    if ($numero < 1 || $numero > 50) {
        $mensagem = "Digite um número entre 1 e 50";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Resultado da Tabuada</h2>

    <?php if (!isset($_GET["numero"])) { ?>

        <div class="alert alert-info">
            <?php echo $mensagem; ?>
        </div>

    <?php } else if ($numero < 1 || $numero > 50) { ?>

        <div class="alert alert-danger">
            <?php echo $mensagem; ?>
        </div>

    <?php } else { ?>

        <table class="table table-striped table-hover">
            <tbody>

                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<td>$numero x $i = " . ($numero * $i) . "</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

    <?php } ?>

    <a href="index.php" class="btn btn-primary">Voltar</a>

</div>

</body>
</html>