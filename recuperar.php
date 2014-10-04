<?php
    include '../header.php';
?>
    <section>
        <form id="login">
    <span class="tituloh1">RECUPERAR</span>
    <div id="ingresar">
        <input id="correo" type="text" placeholder="Correo" required autocomplete="off">
    </div>
   
       <div id="ayuda">
        <input type="button" id="btn-recuperar" value="Enviar correo" />
            <a href="usuarios/registro_usuario.php">Registrarse</a>
            <a href="usuarios/login.php">Login</a>
         </div>
</form>
    </div>
    </section>

    <?php
    include '../footer.php';
    ?>