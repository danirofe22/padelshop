<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\reset.css">
    <link rel="icon" type="image/x-icon" href="<?php echo constant('URL'); ?>public\img\logo-v.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1e0d777b0c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .faq-question {
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .faq-question:hover {
            color: #007BFF;
        }

        .faq-answer {
            overflow: hidden;
            max-height: 0;
            transition: all 0.2s ease-in-out;
        }

        .faq-answer.show {
            max-height: 500px; 
        }
    </style>
</head>
<body>
<header>
        <?php require 'src\views\components\header.component.php'; ?>
        <?php require 'src\views\components\menu.component.php'; ?>
    </header>
    <main>
        <div class="container my-5 product-card animate__animated animate__fadeInUp">
            <h1 class="text-center mb-5">Preguntas Frecuentes</h1>
            <section>
                <h5 class="faq-question">¿Qué tipos de raquetas de pádel ofrecen?</h5>
                <p class="faq-answer">Ofrecemos una amplia gama de raquetas de pádel para todos los niveles, desde principiantes hasta profesionales. Nuestra selección incluye raquetas de control, de potencia y equilibradas, de las marcas más reconocidas del mercado.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Qué tipo de pelotas de pádel debería comprar?</h5>
                <p class="faq-answer">Depende de tu nivel de juego y tus preferencias personales. Las pelotas de pádel varían en términos de dureza y presión. Ofrecemos una variedad de pelotas de pádel para satisfacer las necesidades de cada jugador.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Cómo puedo saber qué tamaño de raqueta de pádel necesito?</h5>
                <p class="faq-answer">El tamaño de la raqueta de pádel que necesitas depende de tu nivel de habilidad y tus preferencias personales. Los jugadores principiantes suelen preferir raquetas más ligeras y manejables, mientras que los jugadores más avanzados pueden preferir raquetas más pesadas para obtener más potencia.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Ofrecen clases de pádel?</h5>
                <p class="faq-answer">Actualmente, no ofrecemos clases de pádel. Sin embargo, estamos en proceso de asociarnos con instructores locales y pronto podremos ofrecer lecciones en nuestras instalaciones.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Cómo puedo devolver un producto?</h5>
                <p class="faq-answer">Si no estás satisfecho con tu compra, puedes devolverla dentro de los 30 días a partir de la fecha de compra. El producto debe estar en su estado original y con el recibo de compra.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Cuánto tiempo tarda el envío?</h5>
                <p class="faq-answer">Los pedidos generalmente se procesan y envían dentro de 1-2 días hábiles. El tiempo de entrega puede variar dependiendo de la ubicación.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Puedo reservar una pista de pádel en su tienda?</h5>
                <p class="faq-answer">No, somos una tienda de productos de pádel y no contamos con pistas de pádel. Recomendamos buscar instalaciones locales para reservar una pista.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Ofrecen descuentos para clubes o equipos?</h5>
                <p class="faq-answer">Sí, ofrecemos descuentos para compras al por mayor. Póngase en contacto con nuestro servicio de atención al cliente para obtener más detalles.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Venden ropa y zapatos de pádel?</h5>
                <p class="faq-answer">Sí, ofrecemos una amplia variedad de ropa y zapatos de pádel de las mejores marcas. Tenemos opciones para hombres, mujeres y niños.</p>
            </section>
            <hr>
            <section>
                <h5 class="faq-question">¿Qué formas de pago aceptan?</h5>
                <p class="faq-answer">Aceptamos todas las principales tarjetas de crédito, PayPal, y transferencias bancarias. Todos los pagos se procesan de manera segura.</p>
            </section>
            <hr>
        </div>
    </main>
    <footer>
        <?php require 'src\views\components\footer.component.php';?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.faq-question').click(function() {
                $(this).next('.faq-answer').toggleClass('show');
            });
        });
    </script>
</body>
</html>