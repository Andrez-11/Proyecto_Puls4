<?php
	include("../clases/comentarios_class.php");
	if (isset($_POST["contenido"])){
		$user=$_POST["user"];
		$post=$_POST["post"];
		$comment = new comentarios();
		echo $comment -> insertar($_POST["contenido"],$user,$post);
	}
	else {
		echo "Error en los Parámetros Ins";
	}
?>