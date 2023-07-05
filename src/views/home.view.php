<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tienda de Padel</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public\img\logo-v.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\home.css">
</head>

<body>
    <header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
    </header>
    <main>
        <section class="container py-5">
            <h2 class="mb-4">Categorías</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
                        <img class="product-image" src="public\img\<?php echo $this->data['productosTopOfertas'][2][3] ?>" alt="">
                        <h3 class="product-title">PALAS</h3>
                        <p class="product-description">Nuestras mejores palas de padel</p>
                        <a href="<?php echo constant('URL') . 'home/verCategoria/palas'?>" class="btn btn-primary product-link">Ver palas</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
                        <img class="product-image" src="public\img\<?php echo $this->data['productosTopVentas'][1][3] ?>" alt="">
                        <h3 class="product-title">Equipo</h3>
                        <p class="product-description">El mejor equipo para padel</p>
                        <a href="<?php echo constant('URL') . 'home/verCategoria/equipo'?>" class="btn btn-primary product-link">Ver equipos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
                        <img class="product-image" src="public\img\<?php echo $this->data['productosTopVentas'][0][3] ?>" alt="">
                        <h3 class="product-title">Pelotas</h3>
                        <p class="product-description">Pelotas para partidos y entrenos</p>
                        <a href="<?php echo constant('URL') . 'home/verCategoria/pelotas'?>" class="btn btn-primary product-link">Ver pelotas</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="mb-4">Ofertas especiales</h2>
                <div class="row">
                    <?php foreach ($this->data['productosTopOfertas'] as $producto) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
                                <img class="product-image" src="public\img\<?php echo $producto[3] ?>" alt="<?php echo $producto[1] ?>">
                                <h3 class="product-title"><?php echo $producto[1] ?></h3>
                                <?php if ($producto[9] === 'true') : ?>
                                    <p class="product-price" style="text-decoration: line-through; color: red;">Antes: <?php echo $producto[6] ?> €</p>
                                    <p class="product-price">Ahora: <?php echo $producto[8] ?> €</p>
                                <?php else : ?>
                                    <p class="product-price">Precio: <?php echo $producto[6] ?> €</p>
                                <?php endif; ?>
                                <p class="product-description"><?php echo $producto[2] ?></p>
                                <a href="<?php echo constant('URL') . 'home/verdetalleproducto/' . $producto[0] ?>" class="btn btn-primary product-link">Ver detalle</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Section for the best sellers -->
        <section class="container py-5">
            <h2 class="mb-4">Los más vendidos</h2>
            <div class="row">
                <?php foreach ($this->data['productosTopVentas'] as $producto) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card animate__animated animate__fadeInUp" onclick="this.classList.toggle('animate__pulse')">
                            <img class="product-image" src="public\img\<?php echo $producto[3] ?>" alt="<?php echo $producto[1] ?>">
                            <h3 class="product-title"><?php echo $producto[1] ?></h3>
                            <?php if ($producto[9] === 'true') : ?>
                                <p class="product-price" style="text-decoration: line-through; color: red;">Antes: <?php echo $producto[6] ?> €</p>
                                <p class="product-price">Ahora: <?php echo $producto[8] ?> €</p>
                            <?php else : ?>
                                <p class="product-price">Precio: <?php echo $producto[6] ?> €</p>
                            <?php endif; ?>
                            <p class="product-description"><?php echo $producto[2] ?></p>
                            <a href="<?php echo constant('URL') . 'home/verdetalleproducto/' . $producto[0] ?>" class="btn btn-primary product-link">Ver detalle</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <?php require 'src\views\components\footer.component.php'; ?>
    </footer>
</body>

</html>