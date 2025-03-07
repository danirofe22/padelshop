<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public\img\logo-v.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\product.css">
    <style>
    .product-detail .product-image {
      max-width: 100%;
      height: auto;
    }
    .product-detail .product-title {
      font-size: 24px;
      font-weight: bold;
      margin-top: 20px;
    }
    .product-detail .product-price {
      font-size: 20px;
      color: #666;
      margin-top: 10px;
    }
    .product-detail .product-description,
    .product-detail .product-features,
    .product-detail .product-category {
      margin-top: 20px;
    }
  </style>
</head>
<body>
    <header>
      <?php require 'src\views\components\header.component.php'; ?>
      <?php require 'src\views\components\menu.component.php'; ?>
    </header>
    <aside>
      <?php require 'src\views\components\filters.component.php'; ?>
    </aside>
    <main class="container">
      <article class="row product-detail animate__animated animate__fadeInUp">
        <section class="col-lg-6">
            <img src="<?php echo constant('URL'); ?>public/img/<?php echo $this->data['productData']['data']['imagen'];?>" alt="Producto" class="product-image animate__animated animate__zoomIn">
        </section>
        <section class="col-lg-6">
          <h1 class="product-title"><?php echo $this->data['productData']['data']['nombre'];?></h1>
          <p class="product-price">Precio: <?php echo $this->data['productData']['data']['precio'];?> €</p>
          <p class="product-description"> Descripcion: <?php echo $this->data['productData']['data']['descripcion'];?></p>
          <span class="animate__animated animate__fadeInLeft"><?php echo $this->data['productData']['data']['caracteristicas'];?></span>
          <p class="product-category">Categoría: <?php echo $this->data['productData']['data']['categoria'];?></p>
        </section>
      </article>
    </main>
    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>
</body>
</html>