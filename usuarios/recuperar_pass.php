<?php

	include __DIR__ . "/clases/usuarios.class.php";

	$token = isset($_GET["token"]) ? $_GET["token"] : null;
	$pass = isset($_POST["pass"]) ? $_POST["pass"] : null;
	$pass_conf = isset($_POST["pass_conf"]) ? $_POST["pass_conf"] : null;

	if (empty($token))
	{
		echo "el token es incorrecto";
	}
	else
	{
		$usr = new usuarios();
		$recuperacion = $usr->consulta_recuperacion($token);

		if ($recuperacion == false)
		{
			echo "no se econtro el token, vuelva a enviar el correo";
		}
		else
		{
			echo $recuperacion["nombre"];
			$id_user = $recuperacion["id_user"];

			if (empty($pass))
			{
				echo "la contraseña vacia";
			}
			else if (empty($pass_conf))
			{
				echo "contraseña de confirmacion vacia";
			}
			else
			{
				if ($pass == $pass_conf)
				{
					if ($pass == $recuperacion["contrasena"])
					{
						echo "la contraseña es la misma a la anterior";
					}
					else
					{
						$cambiar = $usr->cambiar_pass($id_user, $pass);

						if ($cambiar == true)
						{
							echo "tu contraseña se ha cambiado correctamente";
						}
						else
						{
							echo "no se pudo cambiar";
						}
					}
				}
				else
				{
					echo "las contraseñas no coinciden";
				}
			}
		}
	}

?>