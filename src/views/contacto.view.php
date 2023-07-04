<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Contacto | Padelshop</title>
</head>

<body>
    <header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
    </header>
    <main style="margin: 100px 0px; ">
        <section class="py-5">
            <div class="container product-card animate__animated animate__fadeInUp">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="mb-4">¿Tienes alguna pregunta? ¡Nos encantaría escuchar de ti!</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" aria-describedby="nombreAyuda">
                            </div>
                            <div class="form-group">
                                <label for="email">Dirección de correo electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailAyuda">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>
    <script>
        $("input, textarea").focus(function(){
            $(this).css("background-color", "#F2F2F2");
        });
        $("input, textarea").blur(function(){
            $(this).css("background-color", "#fff");
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
