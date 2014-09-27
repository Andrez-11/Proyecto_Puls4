<?php
include ("conexion.class.php");

class favoritos{
	function favoritos(){
		$this->conexion = new conexion();
		$this->link = $this->conexion->conecta();
		$this->conexion->selecciona_bd();

	}

	function insertar_favoritos($user,$post){
		$sql_insert = "insert into favoritos(id_user,id_post,favorito) values('$user','$post',1)";
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
			$sql_select= " select favorito from favoritos where id_user='$user' and id_post ='$id_p'";
			$query=mysqli_query($this->link,$sql_select);
			$num_col=mysqli_num_rows($query);
		if($num_col>0)
		{
			$salida="<input type='hidden' name=".$reg['titulo']." value='1' />";
			return $salida;
		}
		else
			$salida="<input type='hidden' name=".$reg['titulo']." value='0' />";
			return $salida;

		}

	}


function busca($condicion="1=1"){
		$sql_select="select usu_clave,usu_nickname,usu_nombre,usu_apellido_paterno,usu_apellido_materno,usu_rol_clave,rol_nombre from usuarios,roles
		where rol_clave= usu_rol_clave and $condicion";
		$query = mysqli_query($this->link,$sql_select);
		$salida="<table class='listado'>
				 <tr>
				 	<th>Nickname</th><th>Nombre</th><th>Rol</th></tr>";
		while ($reg= mysqli_fetch_assoc($query)) {
			$salida.="<tr class='modifica' id='".$reg["usu_clave"]."'><td>".$reg["usu_nickname"]."</td><td>";
			$salida.=$reg["usu_nombre"]." ".
			$reg["usu_apellido_paterno"]." ".
			$reg["usu_apellido_materno"]."</td><td>".
			$reg["rol_nombre"]."</td></tr>";
			# code...
		}
		$salida.= "</table>";
		return $salida;
	}











	function contar_favoritos($post){
		$sql_select= " select count(*) from favoritos where id_post ='$post'";
		$query= mysqli_query($this->link,$sql_select) or die ("Consulta Incorrecta");
		$favorito= mysqli_fetch_assoc($query);
		return $favorito;

	}








}



?>