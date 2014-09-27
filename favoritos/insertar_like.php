<?php  
	session_start();
	include("../clases/favoritos.class.php");
	if(isset($_SESSION["id_user"])){
		$fav= new favoritos();
		echo $fav->insertar_favoritos($_SESSION["id_user"],
			$_POST["id_post"]);
	}
	else{
		echo "Error en los Parametros";
	}

?>