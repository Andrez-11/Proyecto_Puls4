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
	<script src="//<?= @$dominio; ?>/js/jquery.min.js" charset="utf-8"></script>
	<script src="//<?= @$dominio; ?>/js/jquery-ui.min.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/puls4.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="//<?= @$dominio; ?>/css/jquery-ui.structure.min.css">
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
		</div>
		<?php
			}
		?>
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