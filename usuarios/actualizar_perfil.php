<?php session_start();

	$sesion = isset($_SESSION["puls4"]) ? $_SESSION["puls4"] : false;

 	if (!$sesion)
    {
        exit();
    }

	include __DIR__ . "/../clases/usuarios.class.php";
	include __DIR__ . "/../clases/validador.php";
	
	if(isset($_POST["user"])){

		$user = isset($_POST["user"]) ? $_POST["user"] : null;
		$alias = isset($_POST["alias"]) ? $_POST["alias"] : null;
		$correo = isset($_POST["correo"]) ? $_POST["correo"] : null;

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
		else
		{
			$id_user = isset($_SESSION["puls4"]) ? $_SESSION["puls4"] : 0; 
			$usr = new usuarios();
			$actualiza = $usr->actualizar(
				$user,
				$alias,
				$correo,
				$id_user);

			if ($actualiza == true)
			{
				echo "se ha guardado correctamente tus datos";
			}
			else
			{
				echo "No se pudo guardar";
			}
		}
	}
	else
	{
		//echo "Error en los parámetros";
	}
?>