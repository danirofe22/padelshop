<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tienda de Padel</title>
    <link rel="stylesheet" href="public\css\reset.css">
    <link rel="icon" type="image/x-icon" href="public\img\logo-v.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public\css\main.css">
    <link rel="stylesheet" href="public\css\home.css">
</head>
<body>
    <header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
    </header>

    <main>
        <!-- Section for the categories -->
        <section class="container py-5">
            <h2 class="mb-4">Categorías</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/raquetas.jpg" alt="Raquetas de pádel">
                        <div class="card-body">
                            <h5 class="card-title">Raquetas</h5>
                            <p class="card-text">Explora nuestra amplia gama de raquetas de pádel.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <!-- Replicate the above structure for other categories, like balls, bags, shoes... -->
            </div>
        </section>

        <!-- Section for the special offers -->
        <section class="bg-light py-5">
            <div class="container">
                <h2 class="mb-4">Ofertas especiales</h2>
                <div class="row">
                    <!-- Here you can add your products cards like in the categories section. Use an `img` for the product image, 
                    a `card-title` for the product name, a `card-text` for the product description, and a `btn` for the product link -->
                </div>
            </div>
        </section>

        <!-- Section for the best sellers -->
        <section class="container py-5">
            <h2 class="mb-4">Los más vendidos</h2>
            <div class="row">
                <!-- Here you can add your products cards like in the categories section. Use an `img` for the product image, 
                a `card-title` for the product name, a `card-text` for the product description, and a `btn` for the product link -->
            </div>
        </section>
    </main>

    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>
</body>
</html>