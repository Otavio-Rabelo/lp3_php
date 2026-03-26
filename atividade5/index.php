<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Atividade 5</title>
</head>

<body>

    <div class="container">

        <div class="row">

            <h1 class="text-center">Formularios</h1>

            <div class="col-md-4">

                <form action="questao1.php" method="POST">

                    <div class="mb-3">
                        <label for="Nome" class="form-label">Qual seu nome</label>
                        <input type="text" class="form-control" id="Nome" name="Nome" step="any">
                    </div>

                    <label class="form-label">Escolha os adicionais:</label>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="adicionais[]" value="bacon">
                        <label class="form-check-label">Bacon (R$ 3,00)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="adicionais[]" value="cheddar">
                        <label class="form-check-label">Cheddar Cremoso (R$ 2,50)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="adicionais[]" value="cebola">
                        <label class="form-check-label">Cebola Caramelizada (R$ 2,00)</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="adicionais[]" value="hamburguer">
                        <label class="form-check-label">Hambúrguer Extra (R$ 5,00)</label>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>

            </div>
            <div class="col-md-4">
                <form action="questao2.php" method="GET">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Digite um número (1 a 50):</label>
                        <input type="number" class="form-control" id="numero" name="numero" min="1" max="50" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>