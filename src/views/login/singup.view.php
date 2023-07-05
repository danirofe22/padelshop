<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public\img\logo-v.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\singup.css">
    <title>Tienda de padel</title>
</head>
<body>
    <main class="container">
        <section class="row justify-content-center mt-5">
          <article class="col-md-6">
            <container class="card">
              <header class="card-header">
                <h3 style="color: white;" class="text-center">Registro</h3>
              </header>
              <container class="card-body">
                <form action="/padelshop/singup/registerUser" method="post">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control mb-3" id="nombre" name="nombre" placeholder="Ingresa tu nombre">

                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control mb-3" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos">

                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control mb-3" id="usuario" name="username" placeholder="Ingresa tu usuario">
    
                  <label for="contrasena">Contraseña</label>
                  <input type="password" class="form-control mb-3" id="contrasena" name="password" placeholder="Ingresa tu contraseña">

                  <label for="email">Email</label>
                  <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Ingresa tu email">

                  <label for="telefono">Teléfono</label>
                  <input type="tel" class="form-control mb-3" id="telefono" name="telefono" placeholder="Ingresa tu teléfono">
                  <buttons class="buttons">
                    <button type="submit" class="btn btn-primary btn-block"><p class="white-text">Registrarse</p></button>
                    <a href="login">
                      <button type="button" class="btn btn-link btn-block"><p>Volver al inicio de sesión</p></button>
                    </a>
                  </buttons>
                </form>
              </container>
            </container>
          </article>
        </section>
      </main>
</body>
</html>