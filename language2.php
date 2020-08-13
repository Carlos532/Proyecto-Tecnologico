<!-------------------------------------------- INICIO CUERPO HTML ----------------------------------------------------------------------------->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Language</title>
    <link rel="stylesheet" href="libs/css/estilos_idiomas.css">
    <link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<!--------------------------------------------- CODIGO BANNER Y NAVBAR ------------------------------------------------------------------------>

<body>
    <header>
        <nav>
            <a href="index2.php">Home</a>
            <a href="about_us2.php">About us</a>
            <a href="services2.php">Services</a>
            <a href="language2.php">Language</a>
            <a href="login_v2.php">Login</a>
        </nav>
        <section class="textos-header">
            <h1>Switch language</h1>
            <h2>In this option you can select the language in which you would like to view our website</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-19.60,114.95 C150.00,150.00 351.74,-49.98 508.98,93.25 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
<!-------------------------------- CODIGO CARDS DONDE MUESTRA LOS IDIOMAS QUE SE PUEDEN SELECCIONAR -------------------------------------------->
    <main>
        <section class="miembros">
            <div class="contenedor">
                <h2 class="titulo">Please select a language</h2>
                <div class="cards">
                    <div class="card">
                        <img src="libs/images/315dcc8ef5db215fed939a226d61c9ab.jpg" alt="">
                        <br>
                        <h4>Spanish</h4>
                        <a href="idioma1.php" class="boton">Select language</a>
                    </div>
                    <div class="card">
                        <img src="libs/images/bandera-estados-unidos-america_1401-253.jpg" alt="">
                        <br>
                        <h4>English</h4>
                        <a href="language1.php" class="boton">Select language</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!----------------------------------------------- CODIGO FOOTER ------------------------------------------------------------------------>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>7128-8501</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>Jaibitasracing2020@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>10 Avenida Sur #2-2, Santa Tecla</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Jaibita's Racing El Salvador</h2>
    </footer>
</body>
    <script>
        function Mensaje() {
        Swal.fire('Esta opcion solo esta habilitada para clientes suscritos, porfavor suscribete a nuestra página web')
    }
    </script>
</html>