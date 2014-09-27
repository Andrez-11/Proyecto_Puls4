<?php
	include("conexion.class.php");
	class comentarios{
		function comentarios(){
			$this->conexion = new conexion();
			$this->link=$this->conexion->conecta();
		}
		function insertar($cont,$user,$post){
			$sql="insert into comentarios (contenido_comen,id_user,id_post,fecha_comen)
				values('$cont',$user,$post,now())";
			mysqli_query($this->link,$sql) or die ("Error en la Inserción");
			return "Inserción Exitosa";
		}
		function actualizar($id,$cont){
			$sql="update comentarios set contenido_comen='$cont', fecha_comen=now() where id_comen=$id";
			mysqli_query($this->link,$sql) or die ("Error en la Actualización");
			return "Actualización Exitosa";
		}
		function buscar($cond="1=1",$post){
			$sql="select avatar,alias_usuario,id_comen,contenido_comen,time_to_sec(timediff(now(),fecha_comen)) as time_comen,comentarios.id_user from usuarios,comentarios 
				where usuarios.id_user=comentarios.id_user and id_post=$post and $cond order by fecha_comen desc";
			$query=mysqli_query($this->link,$sql) or die ("Error en Consulta: ".mysqli_error($this->link));

			$sqlx="select titulo from usuarios,crear_post where usuarios.id_user=crear_post.id_user and id_post=$post";
			$queryx=mysqli_query($this->link,$sqlx) or die ("Error en Consulta: ".mysqli_error($this->link));
			$regx=mysqli_fetch_assoc($queryx);

			$salida="<h2>".$regx["titulo"]."</h2>";
			while($reg=mysqli_fetch_assoc($query)){
				//$dt=time()-strtotime($reg["fecha_comen"]);
				$dt=$reg["time_comen"];
				switch (TRUE) {
					case ($dt<60):
						$pon="hace ".$dt." segundos";
						break;
					case ($dt<3600):
						$dt=round($dt/60,0);
						$pon="hace ".$dt." minutos";
						break;
					case ($dt<86400):
						$dt=round($dt/3600,0);
						$pon="hace ".$dt." horas";
						break;
					case ($dt<2592000):
						$dt=round($dt/86400,0);
						$pon="hace ".$dt." dias";
						break;
					case ($dt<31104000):
						$dt=round($dt/2592000,0);
						$pon="hace ".$dt." meses";
						break;
					default:
						break;
				}
				$salida.="<div class='comment'>"
							."<div class='logo'><img class='avatar' src='../images/".$reg["avatar"]."'></div>"
							."<div class='alias'><h3>".$reg["alias_usuario"]."</h3></div>"
							."<div class='fecha'>".$pon."</div>"
							."<div class='contenido' id='".$reg["id_comen"]."' value='".$reg["contenido_comen"]."' title='".$reg["id_user"]."'>"
								.$reg["contenido_comen"]."</div></div>";
			}
			return $salida;
		}
	}
?>