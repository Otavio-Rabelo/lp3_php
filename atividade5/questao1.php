<?php
$custoFixo = 20;
$nome = $_POST['Nome'] ?? '';
$adicionais = $_POST['adicionais'] ?? [];

$valorLanche = $custoFixo;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="card" style="width: 350px;">
        <div class="card-header text-white bg-primary text-center">
            Resumo do Pedido
        </div>
        <div class="card-body text-center">
            <p><strong>Cliente:</strong> <?= htmlspecialchars($nome) ?></p>

            <p><strong>Adicionais:</strong></p>
            <?php
            if (!empty($adicionais)) {
                echo '<ul class="list-group mb-3">';
                foreach ($adicionais as $item) {
                    if ($item == "bacon") $valorLanche += 3;
                    if ($item == "cheddar") $valorLanche += 2.5;
                    if ($item == "cebola") $valorLanche += 2;
                    if ($item == "hamburguer") $valorLanche += 5;
                    echo '<li class="list-group-item">' . ucfirst($item) . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<div class="text-secondary mb-3">Nenhum adicional selecionado</div>';
            }
            ?>

            <p><strong>Total a pagar:</strong> R$ <?= $valorLanche ?></p>
            <a href="index.php" class="btn btn-primary mt-3">Voltar</a>
        </div>
    </div>
</div>