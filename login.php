<?php include "header.php";

    if ($sesion)
    {
        header("Location: index.php");
    }
?>
     <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript" src="js/login.js"></script>
    <section>
        <form id="login">
    <span class="tituloh1">INGRESAR</span>
    <div id="ingresar">
        <input id="user" type="text" placeholder="Usuario" required autocomplete="off">   
        <input id="pass" type="password" placeholder="Contraseña" required>
    </div>
   
       <div id="ayuda">
        <input type="button" id="btn-login" value="Log In" />
            <a href="registro_usuario.php">Registrarse</a>
            <a href="recuperar.php">¿Olvidaste tu Contraseña?</a>
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