<?php
	include("../clases/comentarios_class.php");
	
	if (isset($_GET["clave"])){
		$comment = new comentarios();
		$id=$_GET["clave"];
		$cont=$_GET["ncomen"];
		echo $comment -> actualizar($id,$cont);
	}
	else {
		echo "Error en los Parámetros";
	}
?>