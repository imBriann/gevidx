<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preload" href="css/normalize.css" as="style" />
    <link href="css/normalize.css" rel="stylesheet" />
    <link rel="preload" href="css/style.css" as="style" />
    <link rel="icon" href="img/logo-pagina.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/logo-pagina.png" type="image/x-icon" />
    <title>GeVidx</title>
</head>

<body>
    <nav class="barra-nav">
        <div class="logo">
            <a href="gevidx.php">
                <img src="img/logo-principal-negro.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <div class="nav-links">
            <a href="#inicio" class="seleccion">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Unidades</a>
            <a href="#">Documentación</a>
            <a href="#" style="margin-right: 50px;">Contacto</a>
        </div>
    </nav>

    <section id="inicio">
        <div class="seccion-parallax">
            <div class="texto">
                <p>Impulsa tu <span class="rainbow">creatividad</span> y productividad con tecnología transformadora</p>
                <button class="button">Conoce más</button>
            </div>
        </div>
    </section>
    <section id="nosotros">
        <div class="about-container">
            <div class="about-image">
                <img src="/img/unipamplona2.jpg" alt="Imagen" class="responsive-img">
            </div>
            <div class="about-text">
                <h2>Acerca de GeVidx</h2>
                <p>Gevidx es una plataforma digital creada por Brian Acevedo y Geron Vergara, con el propósito de proporcionar información y recursos sobre diversas plataformas tecnológicas. Desarrollada como parte de un proyecto universitario de la Universidad de Pamplona, Gevidx busca ser un punto de encuentro para estudiantes, profesionales y entusiastas de la tecnología, donde puedan acceder a contenido actualizado y útil relacionado con las herramientas tecnológicas más relevantes en el mundo actual.</p>
                <button class="btn">Quiénes somos</button>
            </div>
        </div>
    </section>
    <section id="temas" class="temas2">

        <h2 style="margin-top: -20px;">Temas Populares</h2>

        <div class="temas" style="margin-top: -20px;">
            <div class="card">
                <div class="bg">
                    <h2>Sistemas Operativos</h2>
                    <p>Un sistema operativo es esencial para el funcionamiento de cualquier dispositivo computacional. Gestiona recursos, garantiza la seguridad, y facilita la interacción entre el hardware, las aplicaciones y los usuarios. Su diseño y funcionalidad varían según el entorno en el que se utilicen, desde computadoras personales hasta grandes servidores.</p>
                </div>
                <div class="blob"></div>
            </div>
            <div class="card">
                <div class="bg">
                    <h2>Gestión de Procesos</h2>
                    <p>La gestión de procesos administra las tareas en un sistema operativo, abarcando su creación, planificación, sincronización y terminación. Los procesos cambian entre estados como listo, en ejecución y bloqueado, gestionados con algoritmos (FIFO, Round Robin) y mecanismos de sincronización (semáforos, mutex).</p>
                </div>
                <div class="blob"></div>
            </div>
            <div class="card">
                <div class="bg">
                    <h2>Jerarquía de Memoria</h2>
                    <p>La jerarquía de memoria clasifica los niveles de almacenamiento en un sistema según velocidad y capacidad: registros, caché, RAM, almacenamiento secundario (discos) y terciario (cintas, nube). Este modelo permite un equilibrio entre rendimiento y costo, optimizando accesos frecuentes mediante caché y gestionando grandes volúmenes con almacenamiento secundario o terciario.</p>
                </div>
                <div class="blob"></div>
            </div>
        </div>
    </section>

    <div class="fixed-link">
        <a href="https://www.unipamplona.edu.co" target="_blank">
            Universidad de Pamplona
        </a>
    </div>

    <script src="js/script.js"></script>
</body>

<footer>
    <p>&copy; 2025 by GeVidx. Todos los derechos reservados.</p>
</footer>

</html>