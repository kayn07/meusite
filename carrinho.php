<?php
session_start();

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Exibe os itens do carrinho
echo "<h2>Itens no Carrinho</h2>";

if (empty($_SESSION['carrinho'])) {
    echo "<p>Seu carrinho está vazio.</p>";
} else {
    foreach ($_SESSION['carrinho'] as $produto) {
        echo "<p>{$produto}</p>";
    }
}
?>
<a href="index.php">Voltar</a>
