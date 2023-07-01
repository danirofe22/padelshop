<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public\img\logo-v.png">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <title>Tienda de padel</title>
    <? require 'src\controllers\login\login.controller.php';?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('ruta_de_tu_imagen.jpg');
            background-size: cover;
        }
        .signup-container {
            background-color: white;
            padding: 2rem;
        }
        .form-control-clear {
            cursor:pointer;
        }
    </style>
</head>
<body>
    <main class="container-fluid">
        <section class="row justify-content-end">
            <article class="col-12 col-md-6 signup-container">
                <form>
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" id="name" name="name">
                    <button type="button" class="form-control-clear">X</button>

                    <label for="lastname">Apellidos</label>
                    <input class="form-control" type="text" id="lastname" name="lastname">
                    <button type="button" class="form-control-clear">X</button>

                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email">
                    <button type="button" class="form-control-clear">X</button>

                    <label for="username">Usuario</label>
                    <input class="form-control" type="text" id="username" name="username">
                    <button type="button" class="form-control-clear">X</button>

                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" id="password" name="password">
                    <button type="button" class="form-control-clear">X</button>

                    <label for="phone">Teléfono</label>
                    <input class="form-control" type="tel" id="phone" name="phone">
                    <button type="button" class="form-control-clear">X</button>

                    <button type="submit" class="btn btn-primary mt-3">Registrar</button>
                </form>
            </article>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.form-control-clear').click(function() {
            $(this).siblings('.form-control').val('');
        });
    </script>
</body>
</html>