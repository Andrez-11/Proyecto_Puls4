<?php session_start();
	$archivo = isset($_FILES["archivo"]) ? $_FILES["archivo"] : null;

	if(empty($archivo["name"]))
	{
		echo "no ha seleccionado una imagen";
	}
	else
	{
		$tipo = $archivo["type"];

		switch ($tipo)
		{
			case 'image/png':
				$extension = "png";
				break;

			case 'image/jpg':
				$extension = "jpg";
				break;

			case 'image/jpeg':
				$extension = "jpeg";
				break;
			
			default:
				$extension = "jpg";
				break;
		}

		$id_user = isset($_SESSION["puls4"]) ? $_SESSION["puls4"] : 0;
		$ruta = "{$id_user}.{$extension}";

		$copiar_en_carpeta = copy($archivo["tmp_name"], "../images/" . $ruta);

		if($copiar_en_carpeta)
		{
			include __DIR__ . "/../clases/usuarios.class.php";

			$usr = new usuarios();
			$usr->avatar($ruta, $id_user);
			header("Location: perfil.php");
		}
		else
		{
			echo "no";
		}
	}
?>