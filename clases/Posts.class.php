<?php 
	include("conexion.class.php");
class Posts{

	function Posts(){
		$this->conexion = (new conexion())->conecta();
		$this->id			="";
		$this->title		="";
		$this->timesince	="";
		$this->likes		="";
		$this->author		="";
		$this->imag			="";
		$this->tags			="";
		$this->fav			="";
		$this->nocomens		="";
		
	}

	function insertPosts(){}
	function searchPosts($id=""){
		if($id != ""){ //quiero buscar el post solo
			$sql ="select id_post, titulo, `like`, alias_usuario, (time_to_sec(datediff(now(),fecha))) as fecha from crear_post, usuarios where crear_post.id_user=usuarios.id_user and id_post = $id";
			//			join post_temas, temas, usuarios, comentarios, archivos"
			$query = mysqli_query($this->conexion, $sql);
			$post=mysqli_fetch_assoc($query);

			$this->id[] 			=  $post["id_post"];
			$this->title[] 		=  $post["titulo"];
			$this->timesince[] 	=  $post["fecha"];
			$this->likes[] 			=  $post["like"];
			$this->author[] 		=  $post["alias_usuario"];

			//$this->imag[] 		=  $post[""];
			$sql = "select nom_tema from post_temas, temas where post_temas.id_post=".$post['id_post']." and post_temas.id_tema = temas.id_tema";
			$query = mysqli_query($this->conexion, $sql);
			while ($tema=mysqli_fetch_assoc($query)){
				$this->tags[$post["id_post"]][] 		=  $tema["nom_tema"];
			}
			
			
			//$this->fav[] 		=  $post[""];

				$sql = "select count(*) total from comentarios where id_post = ".$post['id_post'];
			$query = mysqli_query($this->conexion, $sql) or die(mysqli_error());
			$comens = mysqli_fetch_assoc($query);
			$this->nocomens[] 	=  $comens["total"];

		}else{
			//echo "muchos";
			$sql ="select id_post, titulo, `like`, alias_usuario, (time_to_sec(datediff(now(),fecha))) as fecha from crear_post, usuarios where crear_post.id_user=usuarios.id_user";
			//			join post_temas, temas, usuarios, comentarios, archivos"
			$querypost = mysqli_query($this->conexion, $sql);
			while($post=mysqli_fetch_assoc($querypost)){
				$this->id[] 			=  $post["id_post"];
				$this->title[] 		=  $post["titulo"];
				$this->timesince[] 	=  $post["fecha"];
				$this->likes[] 			=  $post["like"];
				$this->author[] 		=  $post["alias_usuario"];

				//$this->imag[] 		=  $post[""];
				$sql = "select nom_tema from post_temas, temas where post_temas.id_post=".$post['id_post']." and post_temas.id_tema = temas.id_tema";
				$query = mysqli_query($this->conexion, $sql);
				while ($tema=mysqli_fetch_assoc($query)){
					$this->tags[$post["id_post"]][] 		=  $tema["nom_tema"];
				}
				
				
				//$this->fav[] 		=  $post[""];

				$sql = "select count(*) total from comentarios where id_post = ".$post['id_post'];
				$query = mysqli_query($this->conexion, $sql) or die(mysqli_error());
				$comens = mysqli_fetch_assoc($query);
				$this->nocomens[] 	=  $comens["total"];
			}
		}
		$json= "{";
		$i = 0;
		//print_r($this->tags);
		//die();
		foreach ($this->id as $post){
			$json.= "\"".$post."\":{";
				$json.= "\"id\": \""			.$post."\",";
				$json.= "\"title\": \""		.$this->title[$i]."\",";
				$json.= "\"timesince\": \""	.$this->timesince[$i]."\",";
				$json.= "\"likes\": \""		.$this->likes[$i]."\",";
				$json.= "\"author\": \""		.$this->author[$i]."\",";
				//$json.= "\"imag\": \""		.$this->imag[$i]."\",";
				$json.= "\"tags\":[";		
					foreach ($this->tags[$post] as $tag){
						$json.= "\"".$tag."\",";
					}
					$json.= "],";
				//$json.= "\"fav\": \""			.$this->fav[$i]."\",";
				$json.= "\"nocomens\": \""	.$this->nocomens[$i]."\"";
			$json.= "},";
			$i++;
		}
		$json.= "}";
		$json = str_replace(",]", "]", $json);
		$json = str_replace("},}", "}}", $json);
		echo $json;

	}
}
?>