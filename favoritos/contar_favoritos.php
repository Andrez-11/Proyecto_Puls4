<?php  
	include("../clases/favoritos.class.php");
	if(isset($_POST["id_user"])){
		$fav= new favoritos();
		echo $fav->contar_favoritos($_POST["id_user"]);
	}
	else{
		echo "Error en los Parametros";
	}

?>