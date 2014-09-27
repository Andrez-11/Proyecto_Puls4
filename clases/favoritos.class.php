<?php
include ("conexion.class.php");

class favoritos{
	function favoritos(){
		$this->conexion = new conexion();
		$this->link = $this->conexion->conecta();

	}

	function insertar_favoritos($user,$post){
		$sql_insert = "insert into favoritos(id_user,id_post,favorito) values($user,$post,1)";
		mysqli_query($this->link,$sql_insert) or die ("Error en la Insercion de Favoritos");
		return "favoritos";

	}
	function modificar_favoritos($user,$post){
		$sql_select= "update favoritos set favorito=0 where id_user ='$user'and id_post='$post'";
		mysqli_query($this->link,$sql_select) or die ("Consulta Incorrecta");
		return "nofavoritos";

	}

	function buscar_favoritos($user){
		$sql_query=" select id_post, titulo from crear_post LIMIT 3";
		$sql=mysqli_query($this->link,$sql_query) or die ("Consulta Incorrecta");

		while ($reg= mysqli_fetch_assoc($sql)) {
			$id_p= $reg['id_post'];
			$sql_select= " select id_favoritos,favorito from favoritos where id_user='$user' and id_post ='$id_p'";
			$query=mysqli_query($this->link,$sql_select);
			$num_col=mysqli_num_rows($query);
		if($num_col>0)
		{
			$salida='<article class="post" id="'.$id_p.'">';
			$salida.='<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="favoritos"><input type="hidden" value="1" /></span> 
				</div>
			</div>
		 </article>';
			return $salida;
		}
		else
			$salida='<article class="post" id="'.$id_p.'">';
			$salida.='<div class="generales">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos"><input type="hidden" value="0" /></span> 
				</div>
			</div>
		 </article>';
			return $salida;

		}

	}



	



	function contar_favoritos($post){
		$sql_select= " select count(*) from favoritos where id_post ='$post'";
		$query= mysqli_query($this->link,$sql_select) or die ("Consulta Incorrecta");
		$favorito= mysqli_fetch_assoc($query);
		return $favorito;

	}








}



?>