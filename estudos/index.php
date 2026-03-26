<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Prova PHP</title>
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Prova PHP</h1>

    <div class="row">

        <!-- QUESTÃO 1 -->
        <div class="col-md-6">
            <div class="card p-4 shadow">

                <h4 class="mb-3">Questão 1</h4>

                <form action="questao1.php" method="POST">

                    <input type="number" step="0.1" name="nota1" placeholder="Nota 1" class="form-control mb-2">
                    <input type="number" step="0.1" name="nota2" placeholder="Nota 2" class="form-control mb-2">
                    <input type="number" step="0.1" name="nota3" placeholder="Nota 3" class="form-control mb-2">
                    <input type="number" name="frequencia" placeholder="Frequência (%)" class="form-control mb-3">

                    <button type="submit" class="btn btn-success w-100">Calcular</button>

                </form>

            </div>
        </div>

        <!-- QUESTÃO 2 -->
        <div class="col-md-6">
            <div class="card p-4 shadow">

                <h4 class="mb-3">Questão 2</h4>

                <form action="questao2.php" method="GET">

                    <input type="number" name="numero" placeholder="Digite um número" class="form-control mb-3">

                    <button type="submit" class="btn btn-primary w-100">Gerar Tabuada</button>

                </form>

            </div>
        </div>

    </div>

</div>

</body>
</html>