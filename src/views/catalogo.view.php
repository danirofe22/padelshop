<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="icon" type="image/x-icon" href="public\img\logo-v.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\product.css">
  <style>
    /* Estilos personalizados para las tarjetas de producto */
    .product-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .product-card img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }
    .product-card .product-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .product-card .product-price {
      font-size: 16px;
      color: #666;
    }
    .product-card .product-description {
      margin-top: 10px;
    }
    .product-card .product-link {
      margin-top: 20px;
    }
    .product-image {
    width: 100%;
    height: 200px; /* Ajusta este valor según tus necesidades */
    object-fit: cover; /* Esto asegurará que las imágenes se escalen correctamente para llenar el contenedor manteniendo su aspecto */
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
    <main>
    <div class="container">
    <div class="row">
      <?php foreach ($this->data['productos'] as $producto): ?>
        <div class="col-lg-4 col-md-6">
          <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
            <img class="product-image" src="public\img\<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
            <h3 class="product-title"><?= $producto['nombre'] ?></h3>
            <p class="product-price"><?= $producto['precio'] ?></p>
            <p class="product-description"><?= $producto['descripcion'] ?></p>
            <a href="#" class="btn btn-primary product-link">Ver detalle</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div> 
</div>
    </main>
    <footer>
      <?php require 'src\views\components\footer.component.php';?>
    </footer>
</body>
</html>