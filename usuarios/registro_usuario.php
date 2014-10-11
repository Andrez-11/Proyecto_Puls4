<?php
    include '../header.php';
?>
    <section>
        <div id="crearpost">
            <form id="post" method="POST" action="" enctype="multipart/form-data">
                <!--<form id ="frminsertar" action ="" method="post">-->
                <span class="tituloh1">REGISTRAR USUARIO</span>
<<<<<<< Updated upstream
                <?php include __DIR__ . "/usuarios/insertar_usuario.php"; ?>
=======
                <?php include "usuarios/insertar.php"; ?>
>>>>>>> Stashed changes
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



<?php  
    include '../footer.php';
?>
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
