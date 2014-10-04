<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <!--desactivara el pinch to zoom en moviles y el navegador tomara el tamaño del navegador
    viewport= a donde se ve!
    -->
    <meta charset="utf-8"/>
    <title>Puls4: Comunidad profesional de gente atractiva</title>
    <script src="js/jquery.min.js" charset ="utf-8" ></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/puls4.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="js/recuperar.js"></script>
</head>
<body>
    <header>
        <a href="index.php">
            <div class="logo">
            <img src="images/logo.png">
            </div>
        </a>
        <div class="titulo">
            <h1>Puls4: Comunidad de gente atractiva</h1>
            <p>Stylus</p>
        </div>
        <div class="avatar">
            <a class="publicar" href="crearpost.php">Publicar</a>
            <img src="images/avatar.jpg">
            <a class="flechita" href="login.php"></a>
        </div>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="#">Python</a></li>
            <li><a href="#">HTML5</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">Django</a></li>
            <li><a href="#">CSS3</a></li>
        </ul>

    </nav>
    <section>
        <form id="login">
    <span class="tituloh1">RECUPERAR</span>
    <div id="ingresar">
        <input id="correo" type="text" placeholder="Correo" required autocomplete="off">
    </div>
   
       <div id="ayuda">
        <input type="button" id="btn-recuperar" value="Enviar correo" />
            <a href="registro_usuario.php">Registrarse</a>
            <a href="login.php">Login</a>
         </div>
</form>
    </div>
    </section>
    <aside class="barrita"></aside>
    <footer>
        <div>
            <strong>Powered by Vinculacion ITD</strong>
                <p class="powered">Diplomado de tecnologías web</p>
        </div>
    </footer>

</body>
</html>