<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="reset.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public\img\logoV.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="src\views\login\login.css">
    <link rel="stylesheet" href="public\css\reset.css">
    <link rel="stylesheet" href="public\css\main.css">
    <title>Tienda de padel</title>
</head>
<body>
    <main class="container">
        <section class="row justify-content-center mt-5">
          <article class="col-md-6">
            <container class="card">
              <header class="card-header">
                <h3 class="text-center">Iniciar sesión</h3>
              </header>
              <container class="card-body">
                <form action="procesar.php" method="post">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control mb-3" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
    
                  <label for="contrasena">Contraseña</label>
                  <input type="password" class="form-control mb-3" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña">
    
                  <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                </form>
              </container>
            </container>
          </article>
        </section>
      </main>
</body>
</html>