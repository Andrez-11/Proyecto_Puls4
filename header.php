<<<<<<< HEAD
<?php session_start(); //comienza la sesion
		//$_SESSION["id_user"]= 1;

	$sesion = isset($_SESSION["puls4"]) ? $_SESSION["puls4"] : false;
	$dominio = $_SERVER["SERVER_NAME"] . "/php/Proyecto_Puls4";

	if ($sesion)
	{
		include "clases/usuarios.class.php";
		$usr = new usuarios();
		$datos = $usr->persona($sesion);

		$nombre = $datos["nombre"];
		$alias_usuario = $datos["alias_usuario"];
		$email = $datos["email"];
		$avatar = "//" . $dominio . "/images/" . $datos["avatar"];
	} 

=======
<?php
		session_start(); //comienza la sesion
		$_SESSION["id_user"]= 1;
>>>>>>> 38d36e98a5ee0b739f6df007fab5e2be5e0f98dc
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<!--desactivara el pinch to zoom en moviles y el navegador tomara el tamaño del navegador
	viewport= a donde se ve!
	-->
	<meta charset="utf-8"/>
	<title>Puls4: Comunidad profesional de gente atractiva</title>
<<<<<<< HEAD
	<script src="//<?= @$dominio; ?>/js/jquery.min.js" charset="utf-8"></script>
	<script src="//<?= @$dominio; ?>/js/jquery-ui.min.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/puls4.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.structure.min.css">
=======
	<base href="http://localhost/Proyecto_Puls4/"></base>
	
	<script src="js/jquery.min.js" charset="utf-8"></script>
	<script src="js/jquery-ui.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/recuperar.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/puls4.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="css/comentarios.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/registro_user.css">
	
>>>>>>> 38d36e98a5ee0b739f6df007fab5e2be5e0f98dc
</head>
<body>
	<header>
		<a href="//<?= @$dominio; ?>/index.php">
			<div class="logo">
			<img src="//<?= @$dominio; ?>/images/logo.png">
			</div>
		</a>
		<div class="titulo">
			<h1>Puls4: Comunidad de gente atractiva</h1>
			<p>Stylus</p>
		</div>
		<?php
			if (isset($_SESSION["puls4"]))
			{
		?>
		<div class="avatar">
			<a class="salir" href="//<?= @$dominio; ?>/usuarios/salir.php">Salir</a>
			<a class="publicar" href="crearpost.php">Publicar</a>
<<<<<<< HEAD
			<span id="nombre"><?= $nombre; ?></span>
            <img src="<?= @$avatar; ?>">
            <a class="flechita" href="usuarios/perfil.php" title="Ir a mi perfil"></a>
		</div>
		<?php
			}
			else
			{
		?>
		<div class="avatar">
			<a class="publicar" href="login.php">Login</a>
=======
            <img src="images/avatar.jpg">
            <a class="flechita" href="usuarios/login.php"></a>
>>>>>>> 38d36e98a5ee0b739f6df007fab5e2be5e0f98dc
		</div>
		<?php
			}
		?>
	</header>
	<nav>
		<ul class="menu">
			<li><a id="1"href="#">CSS3</a></li>
			<li><a id="2"href="#">HTML5</a></li>
			<li><a id="3"href="#">Python</a></li>
			<li><a id="4"href="#">JavaScript</a></li>
			<li><a id="5"href="#">Django</a></li>
		</ul>

	</nav>