<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link rel="stylesheet" href="recursos/style.css" />
    <link rel="preload" href="recursos/normalize.css" as="style" />
    <link href="recursos/normalize.css" rel="stylesheet" />
    <link rel="preload" href="recursos/style.css" as="style" />
    <link rel="icon" href="recursos/img/logo-pagina.png" type="image/x-icon" />
    <link rel="shortcut icon" href="recursos/img/logo-pagina.png" type="image/x-icon" />
    <title>GeVidx</title>
</head>

<body class="cuerpoPQRS">
    <nav class="barra-nav">
        <div class="logo">
            <a href="gevidx.php">
                <img src="recursos/img/logo-principal-negro.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <div class="nav-links">
            <a href="gevidx.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="unidades.php">Unidades</a>
            <a href="documentacion.php">Documentación</a>
            <a href="#contacto" style="margin-right: 50px;">Contacto</a>
        </div>
    </nav>
    <h2 class="multicolor-title">PQRS</h2>
    <div class="form-container" style="margin: auto; margin-bottom: 100px;">
        <form class="form" action="https://formspree.io/f/mjkveeeg" method="POST">
            <div class="form-group">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>

                <label for="email">Correo</label>
                <input type="text" id="email" name="email" required="">

                <label for="numero">Celular:</label>
                <input type="tel" id="numero" name="numero" required pattern="[0-9]{10}">

            </div>
            <div class="form-group">
                <label for="textarea">Escribe tu PQRS:</label>
                <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
            </div>
            <button class="form-submit-btn" type="submit">Enviar</button>
        </form>
    </div>

    <div id="contacto" class="contacto2">
        <div class="formulario">
            <h2>Envia tu PQRS</h2>
            <p>¿Tienes alguna petición, queja, reclamo o solicitud?
                Ingresa al siguiente enlace y déjanos tu mensaje: <a href="#">PQRS</a></p>
        </div>
        <div class="ubicacion">
            <img src="recursos/img/mUP.png" alt="">
            <div class="ubicacion2">
                <h2>Universidad de Pamplona</h2>
                <a href="https://maps.app.goo.gl/FCesVHaH2VrVLpGZ9" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg> Villa Del Rosario, Norte de Santander</a>
            </div>
        </div>
        <div class="navegacion">
            <a href="gevidx.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="unidades.php">Unidades</a>
            <a href="documentacion.php">Documentación</a>
            <a href="#contacto">Contacto</a>
            <div class="redes">
                <a href="https://www.facebook.com/unipamplona" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg></a>
                <a href="https://www.instagram.com/unipamplona/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg></a>
                <a href="https://www.youtube.com/@UnipamplonaTv" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                    </svg></a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 by GeVidx. Todos los derechos reservados.</p>
    </footer>

    <script src="recursos/js/script.js"></script>
</body>

</html>