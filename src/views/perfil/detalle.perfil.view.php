<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public\img\logo-v.png">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <title>Perfil - Tienda de padel</title>
</head>
<body>
    <header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/padelshop/home">Home ></a></li>
                <li class="breadcrumb-item active" aria-current="page">Ver perfil</li>
            </ol>
        </nav>
    </header>
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-12 col-md-8">
                <h3 class="text-center mb-5">Perfil de usuario</h3>
                <p><strong>Nombre:</strong> <?php echo $this->data['profile']['nombre']; ?></p><hr>
                <p><strong>Apellidos:</strong> <?php echo $this->data['profile']['apellidos']; ?></p><hr>
                <p><strong>Usuario:</strong> <?php echo $this->data['profile']['usuario']; ?></p><hr>
                <p><strong>Email:</strong> <?php echo $this->data['profile']['email']; ?></p><hr>
                <div class="d-flex justify-content-end">
                    <a href="<?php echo constant('URL'); ?>modificarPerfil" class="btn btn-primary">Editar Perfil</a>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>
</body>
</html>