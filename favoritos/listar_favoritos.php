<?php
session_start();

include ('../clases/favoritos.class.php');
	$fav = new favoritos();
	echo $fav->buscar_favoritos($_SESSION["id_user"]);


?>

