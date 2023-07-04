<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public\img\logo-v.png">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <title>Editar perfil</title>
</head>
<body>
    <header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>home">Inicio</a></li>
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>detalleperfil">Perfil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Perfil</li>
            </ol>
        </nav>
    </header>
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-12 col-md-8">
                <h3 class="text-center mb-5">Editar Perfil</h3>
                <form action="<?php echo constant('URL'); ?>modificarPerfil/updateProfileData" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control mb-3" id="nombre" name="nombre" value="<?php echo $this->data['user_data']['nombre']; ?>">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control mb-3" id="apellidos" name="apellidos" value="<?php echo $this->data['user_data']['apellidos']; ?>">

                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control mb-3" id="usuario" name="username" value="<?php echo $this->data['user_data']['usuario']; ?>">

                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control mb-3" id="contrasena" name="password" value="<?php echo $this->data['user_data']['contrasena']; ?>">

                    <label for="email">Email</label>
                    <input type="email" class="form-control mb-3" id="email" name="email" value="<?php echo $this->data['user_data']['email']; ?>">

                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form-control mb-3" id="telefono" name="telefono" value="<?php echo $this->data['user_data']['telefono']; ?>">

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>
</body>
</html>