	<?php
	include('header.php');
	echo '<link rel="stylesheet" type="text/css" href="css/post.css">';
	?>
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
	<?php
	include('footer.php');
	?>

</body>
</html>
