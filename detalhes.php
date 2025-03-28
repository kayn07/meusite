<?php
    require_once 'banco.php';
    $id=$_GET['id'];
    if(isset($id)){
        $produtos = ListarProdutosDetalhes($id);
    } else {
        header('Location: index.php');        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guitarpy</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    
    <!--Navigator-->
    <?php require_once 'nav.php'; ?>
    
    <!--Banner-->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner1.jpg" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/banner2.jpeg" class="d-block w-100" alt="Banner 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <div class="container my-3">
        <div class="content">            

        <div class="row align-items-stretch">
            <?php foreach ($produtos as $produto): ?>
                <div class="col-6" style="display: flex;">
                    <img src="<?= $produto['imagem_link'] ?>" class="w-100 rounded-3" alt="Imagem do produto">
                </div>
                <div class="card shadow col-6 d-flex flex-column justify-content-center">
                    <h3>Nome: <?= $produto['produto_nome'] ?></h3>
                    <p>Categoria: <?= $produto['categoria_nome'] ?></p>
                    <h3>Preço: <?= number_format($produto['produto_preco'], 2, ',', '.') ?></h3>
                    <p>Descrição: <?= nl2br(htmlspecialchars($produto['produto_descricao'])) ?></p>
                    <a href="detalhes.php?id=<?= $produto['produto_id']; ?>" class="btn btn-primary w-100">
                        <i class="fas fa-shopping-cart"></i> Comprar
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

            
        </div>
    </div>

    <!-- Footer -->
    <?php include_once "footer.php"; ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>