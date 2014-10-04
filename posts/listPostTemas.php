<?php 
	include("../clases/Posts.class.php");
	
if(isset($_POST["tema"])){
		$post = new Posts();
		$tema= $_POST["tema"];
		echo $post->searchPostsTag($tema);
	}
	else {
		echo "Error en los Parámetros";
	}


	//print_r($post)
?>