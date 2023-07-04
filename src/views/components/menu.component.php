<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public\css\header.css">
</head>
<body>
    <aside class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#iconMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <section id="iconMenu" class="navbar-collapse collapse flex-md-column menu">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>home"><p>HOME</p></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>#"><p>PRODUCTOS</p></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>#"><p>Q&A</p></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>#"><p>CONTACTO</p></a></li>
            </ul>
        </section>
    </aside>
</body>
</html>