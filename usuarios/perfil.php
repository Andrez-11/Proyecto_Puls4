<?php include "../header.php";

    if (!$sesion)
    {
        header("Location: ../login.php");
    }

?>
    <link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/registro_user.css">
    <script type="text/javascript" src="//<?= @$dominio; ?>/js/perfil.js"></script>
    <section>
        <div id="crearpost">
            <form id="post" method="POST" action="actualizar_avatar.php" enctype="multipart/form-data">
                <!--<form id ="frminsertar" action ="" method="post">-->
                <span class="tituloh1">Mi perfil</span>
                <div id="inputs">
                    <label for="user">Nombre del Usuario:</label>
                    <input id="user" name="user" type="text" value="<?= @$nombre; ?>"  > 
                    <label for="alias">Alias de la Cuenta:</label>
                    <input id="alias" name="alias" type="text" value="<?= @$alias_usuario; ?>">
                    <label for="correo">Correo Electronico:</label>
                    <input id="correo" name="correo" type="text" value="<?= @$email; ?>" >
                    <button id="btn-actualizar-perfil" type="button">Actualizar perfil</button>
                    <label for="conf">Imagen de Perfil:</label>
                    <img src="<?= @$avatar; ?>" width="375px" alt="">
                    <label for="conf">Elija Imagen de Perfil:</label>
                    <input id="archivo" name="archivo" type="file">
                    <input type="submit" value="Actualizar avatar" />
                     <a href="contrasena.php">Cambiar contraseña</a>
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