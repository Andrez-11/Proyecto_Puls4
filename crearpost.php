<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<!--desactivara el pinch to zoom en moviles y el navegador tomara el tamaño del navegador
	viewport= a donde se ve!
	-->
	<meta charset="utf-8"/>
	<title>Puls4: Comunidad profesional de gente atractiva</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/puls4.css">
	<link rel="stylesheet" type="text/css" href="css/post.css">

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
		<form id="post">
	    <span class="tituloh1">CREAR POST</span>
	    <div id="inputs">
	        <input id="titulo" type="text" placeholder="Titulo" autofocus="" required="">   
	        <input id="archivo" type="file" required="">
	        <textarea id="contenido" placeholder="Contenido del Post"></textarea>
	        <select id="tema" name="topic" multiple>
	        	<option value="1">CSS</option>
				<option value="2">HTML</option>
				<option value="3">JavaScript</option>
				<option value="4">PHP</option>
				<option value="5">Python</option>
	        </select>
	    </div>
	    <input id="crear" type="submit" value="Crear Post" />
	 
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
