<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <!--desactivara el pinch to zoom en moviles y el navegador tomara el tamaño del navegador
    viewport= a donde se ve!
    -->
    <meta charset="utf-8"/>
    <script src="js/jquery.min.js" charset ="utf-8" ></script>
    <title>Puls4: Comunidad profesional de gente atractiva</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/puls4.css">
    <link rel="stylesheet" type="text/css" href="css/registro_user.css">
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
        <div id="crearpost">
            <form id="post" method="POST" action="" enctype="multipart/form-data">
                <!--<form id ="frminsertar" action ="" method="post">-->
                <span class="tituloh1">REGISTRAR USUARIO</span>
                <?php include __DIR__ . "/usuarios/insertar_usuario.php"; ?>
                <div id="inputs">
                    <label for="user">Nombre del Usuario:</label>
                    <input id="user" name="user" type="text" value="<?= @$user; ?>"  > 
                    <label for="alias">Alias de la Cuenta:</label>
                    <input id="alias" name="alias" type="text" value="<?= @$alias; ?>">
                    <label for="correo">Correo Electronico:</label>
                    <input id="correo" name="correo" type="text" value="<?= @$correo; ?>" >    
                    <label for="pass">Contraseña a Crear:</label>
                    <input id="pass" name="pass" type="password" value="<?= @$pass; ?>" >
                    <label for="conf">Repita Contraseña:</label>
                    <input id="conf" name="conf" type="password"  >
                    <label for="conf">Elija Imagen de Perfil:</label>
                    <input id="archivo" name="archivo" type="file">
                    <input id="crear" type="submit" value="Crear Nuevo Usuario" />
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
    <script>
     
    /**$(document).on("click","#insertar",function(){
            // manda llamar a través de método post la página insertar.php
            //toma todos los datos del formulario y la estructura que se le implemento en el form
            // cuando termine la ejecuci+on que ejecute una función
            $.post("insertar.php",
            $("#post").serialize(),// genera una estructura de parámetros de forma correcta para post
                //cuando se termina de ejecutar la página insertar.php, se dispara ésta función y automática recibe
                //como paramétro el html resultante
                // serialize, toma la propiedad name poner : y el valor para que los concatene
            function (resultado){
                alert(resultado);
                //volver a refrescar la lista, sin refrescar toda la página
               // lista();
                // para resetear un formulario y dejar los campos en blanco de cuadro de texto
                $("#inputs input[type=text]").val("");
                // mandar el enfoque a un campo especifico
               // $("#inputs input[name=user]").focus();

            });
        });*/
    </script>
</body>
</html>