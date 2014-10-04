<?php
	include __DIR__ . "/../clases/usuarios.class.php";
	include __DIR__ . "/../clases/validador.php";
	
	if(isset($_POST["user"])){

		$user = isset($_POST["user"]) ? $_POST["user"] : null;
		$alias = isset($_POST["alias"]) ? $_POST["alias"] : null;
		$correo = isset($_POST["correo"]) ? $_POST["correo"] : null;
		$pass = isset($_POST["pass"]) ? $_POST["pass"] : null;
		$conf = isset($_POST["conf"]) ? $_POST["conf"] : null;
		$archivo = isset($_FILES["archivo"]) ? $_FILES["archivo"] : null;

		if (empty($user))
		{
			echo "no puede dejar el usuario vacio";
		}
		else if (empty($alias))
		{
			echo "no puede dejar el alias vacio";
		}
		else if (!validador::email($correo))
		{
			echo "Email no valido";
		}
		else if(empty($pass))
		{
			echo "contraseña vacia";
		}
		else if (empty($conf))
		{
			echo "contraseña de confirmacion vacia";
		}
		else if(empty($archivo["name"]))
		{
			echo "no ha seleccionado una imagen";
		}
		else
		{
			if ($pass != $conf)
			{
				echo "la contraseña no coincide";
			}
			else
			{
				$usr = new usuarios();
				$id = $usr->inserta(
					$user,
					$alias,
					$correo,
					$pass);

				$archivo = $_FILES["archivo"];
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

				$ruta = "{$id}.{$extension}";

				$copiar_en_carpeta = copy($archivo["tmp_name"], "images/" . $ruta);

				if($copiar_en_carpeta)
				{
					$usr->avatar($ruta, $id);
					echo "ok";
					header("Location: index.php");
				}
				else
				{
					echo "no";
				}
			}
		}
	}
	else
	{
		//echo "Error en los parámetros";
	}
?>