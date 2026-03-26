<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow">

        <h2 class="mb-4 text-center">Resultado</h2>

        <?php
        // 👉 AQUI ENTRA SUA LÓGICA
        ?>

        <!-- ALERTAS PRONTOS -->
        <div class="alert alert-success mt-3">Sucesso</div>
        <div class="alert alert-warning mt-3">Atenção</div>
        <div class="alert alert-danger mt-3">Erro</div>

        <!-- TABELA PRONTA (pra tabuada) -->
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Conta</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP coloca linhas aqui -->
                </tbody>
            </table>
        </div>

        <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>

    </div>

</div>

</body>
</html>