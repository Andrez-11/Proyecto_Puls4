<?php session_start();

	include "../clases/usuarios.class.php";

	$actual = isset($_POST["contrasena_actual"]) ? $_POST["contrasena_actual"] : null;
	$nueva = isset($_POST["contrasena_nueva"]) ? $_POST["contrasena_nueva"] : null;
	$conf = isset($_POST["contrasena_conf"]) ? $_POST["contrasena_conf"] : null;

	if (empty($actual))
	{
		echo "la contraseña vacia";
	}
	else if (empty($nueva))
	{
		echo "la contraseña nueva vacia";
	}
	else if (empty($conf))
	{
		echo "contraseña de confirmacion vacia";
	}
	else
	{
		$id_user = isset($_SESSION["puls4"]) ? $_SESSION["puls4"] : 0;

		$usr = new usuarios();
		$datos = $usr->persona($id_user);

		if ($actual == $datos["contrasena"])
		{
			if ($nueva == $conf)
			{
				$cambiar = $usr->cambiar_pass($id_user, $nueva);

				if ($cambiar == true)
				{
					echo 1;
				}
				else
				{
					echo "no se pudo cambiar";
				}
			}
			else
			{
				echo "las contraseñas no coinciden";
			}
		}
		else
		{
			echo "la contraseña actual no es correcta";
		}
	}
?>