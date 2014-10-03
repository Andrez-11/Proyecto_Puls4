<?php

    include("../header.php");

?>
    <section>
        <form id="login">
    <span class="tituloh1">INGRESAR</span>
    <div id="ingresar">
        <input id="user" type="text" placeholder="Usuario" required autocomplete="off">   
        <input id="pass" type="password" placeholder="Contraseña" required>
    </div>
   
       <div id="ayuda">
        <input type="button" id="btn-login" value="Log In" />
            <a href="usuarios/registro_usuario.php">Registrarse</a>
            <a href="usuarios/recuperar.php">¿Olvidaste tu Contraseña?</a>
         </div>
</form>
    </div>
    </section>
    <?php

    include("../footer.php");

?>