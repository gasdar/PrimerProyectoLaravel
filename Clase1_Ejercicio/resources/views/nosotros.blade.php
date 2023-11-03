<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <script src="https://kit.fontawesome.com/0c418a5786.js" crossorigin="anonymous"></script>

    <title>Nosotros Prueba</title>
</head>
<body>
    <?php
        if (isset($_GET['user-nombre']) && isset($_GET['user-email'])) {
        $nombre = $_GET['user-nombre'];
        $email = $_GET['user-email'];
        }
    ?>
    <header class="header-base">
        <h1 class="text-center"><span>Sobre Nosotros</span> Prueba</h1>
    </header>

    <div class="contenedor-navegacion">
        <nav class="nav-principal contenedor">
            <a href="/bienvenida">Inicio</a>
            <a href="/contacto">Contacto</a>
            <a href="/nosotros">Sobre Nosotros</a>
        </nav>
    </div>

    <main class="main-base contenedor">
        <div class="nosotros-info">
            <div>
                <h2 class="text-center">Contenido Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maxime est animi doloribus, consequuntur nemo voluptas voluptate molestias debitis maiores cumque impedit vero amet. Adipisci assumenda dolores nulla dolor quos? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt error obcaecati molestiae hic voluptatem quae eos pariatur natus ullam impedit aperiam, exercitationem magnam iure perferendis ea eum possimus libero ducimus.</p>
            </div>
            <div class="base-img-flex">
                <img src="{{asset('assets/img/33.jpg')}}" alt="Imagen Prueba de Paisaje"/>
            </div>
        </div>
        <div class="nosotros-agradecimiento">
            <h2 class="text-center">Agradecimiento a {{$nombre}} </h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat sit facilis, dolores debitis illum ipsam quae neque iure eos officia consequuntur minima eveniet, numquam culpa adipisci, animi labore fugit nobis!</p>
            <p>Más información relevante al email del usuario: <strong>{{$email}}</strong></p>
        </div>
    </main>

    <footer class="footer-base">
        <div class="contenedor">
            <div class="footer-objetos">
                <div><i class="fa-solid fa-book"></i></div>
                <div><i class="fa-solid fa-gear"></i></div>
                <div><i class="fa-solid fa-tree"></i></div>
                <div><i class="fa-solid fa-feather"></i></div>
            </div>
            <div class="derechos">
                <h4 class="text-center">Todos los derechos reservados prueba :)</h4>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>