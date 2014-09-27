<?php
	include ("../clases/comentarios_class.php");
	$comment = new comentarios();
	if(isset($_POST["post"])){
		$content = $_POST["busca"];
		$post = $_POST["post"];
		echo $comment -> buscar("contenido_comen like '%$content%'",$post);
	}
	else {
		echo "Error en los Parámetros";
	}
?>