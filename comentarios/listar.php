<?php
	include ("../clases/comentarios_class.php");
	$comment = new comentarios();
	if(isset($_POST["post"])){
		$post = $_POST["post"];
		echo $comment -> listar($post);
	}
	else {
		echo "Error en los Parámetros List";
	}
?>