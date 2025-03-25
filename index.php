<?php
    require_once 'banco.php';
    $produtos = listarProdutosIndex();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guitarpy</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" type="logo" href="logo.png"> <!--icone no canto da tela-->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    
    <!--Navigator-->
    <?php require_once 'nav.php'; ?>
    
    <!--Banner-->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="aaa.webp" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/s2.png" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="img/s3.png" class="d-block w-100" alt="Banner 2">
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

            <!-- Cards de Produtos -->
            <div class="row">
            
            <?php foreach ($produtos as $produto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 d-flex flex-column">
                        <img src="<?= $produto['imagem_link']; ?>" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;" alt="Produto">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $produto['produto_nome']; ?></h5>
                            <p class="card-text">Descrição: <?= $produto['produto_descricao']; ?></p>
                            <p class="card-text">Preço: <?= $produto['produto_preco']; ?></p>
                            <p class="card-text">Categoria: <?= $produto['categoria_nome']; ?></p>
                            <div class="mt-auto">
                                <a href="detalhes.php?id=<?= $produto['produto_id']; ?>" class="btn btn-primary w-100">Comprar</a>
                            </div>
                        </div>
                    </div>
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