<?php include "../header.php";

    if (!$sesion)
    {
        header("Location: ../login.php");
    }

?>
    <link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/registro_user.css">
    <script type="text/javascript" src="//<?= @$dominio; ?>/js/contrasena.js"></script>
    <section>
        <div id="crearpost">
            <form id="post" method="POST" action="" enctype="multipart/form-data">
                <!--<form id ="frminsertar" action ="" method="post">-->
                <span class="tituloh1">Contraseña</span>
                <div id="inputs">
                    <label for="contrasena-actual">Cotraseña actual</label>
                    <input id="contrasena-actual" name="contrasena" type="password" value=""> 
                    <label for="contrasena-nueva">Nueva contraseña</label>
                    <input id="contrasena-nueva" name="contrasena-nueva" type="password" value="">
                    <label for="contrasena-conf">Repite la contraseña</label>
                    <input id="contrasena-conf" name="contrasena-conf" type="password" value="" >
                    <button id="btn-actualizar-contrasena" type="button">Actualizar contraseña</button>
                     <a href="../recuperar.php">¿Olvidaste tu Contraseña?</a>
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