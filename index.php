<?php
		session_start(); //comienza la sesion
		$_SESSION["id_user"]= 1;

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
	<script src="js/jquery.min.js" charset="utf-8"></script>
	<script src="js/jquery-ui.min.js" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/puls4.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
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
	<section class="posts">
		<article class="post" id="1">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> 
					<!-- <input type="hidden" name="id_post" value="1"/>asdasd-->
				</div>
			</div>
		 </article>
		 <article class="post" id="2">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> <!-- asdasd-->

				</div>
			</div>
		 </article>
		 <article class="post" id="3">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> <!-- asdasd-->
				</div>
			</div>
		 </article>
	</section>
	<script>
//para BUSCAR FAV
/*$document.ready(function(){
		$.post("listar_favoritos.php","",function(resultado){

	
		});


});*/


// para PONER FAV
$(document).on("click",".post", function(){
		var id= $(this).attr("id");

		$(document).on("click",".nofavoritos",function()
		{
			$.post("favoritos/insertar_like.php","id_post="+id,function(resultado){

						$(this).addClass(resultado);
					
					});
		});//para obtener id del post	
	}); //cierra funcion.post

// para QUITAR FAV
$(document).on("click",".post", function(){
		var id= $(this).attr("id");

		$(document).on("click",".favoritos",function()
		{
			var id_fav= $(this).attr("id");
			$.post("favoritos/modificar_like.php","id_post="+id,function(resultado){

						$(this).addClass(resultado);
					
					});
		});//para obtener id del post	
	}); //cierra funcion.post



	


	$(document).on("click",".post", function(){
		var id= $(this).attr("id");
		$(document).on("click",".favoritos",function()
		{
			$.post("favoritos/listar_favoritos.php","id_post="+id,function(resultado){
				if (resultado==1)
					{
						//para insertar

						$(this).addClass('favoritos nofavoritos');
					}

				else if(resultado==0)
					{

						//para eliminar
						$(this).toggleClass('nofavoritos favoritos');
					}
					
					});
				});//para obtener id del post

	
			
		}); //cierra otra funcion?







	</script>
	<aside class="barrita"></aside>
	<footer>
		<div>
			<strong>Powered by Vinculacion ITD</strong>
				<p class="powered">Diplomado de tecnologías web</p>
		</div>
	</footer>

</body>
</html>


<!--shift control arriba o abajo para mover el texto hacia arriba junto-->