<?php session_start(); // hacer uso de las sessiones

	include "../clases/usuarios.class.php";

	if (isset($_POST["usuario"]))
	{
		// Cachamos los valores desde login.js 
		$user = isset($_POST["usuario"]) ? $_POST["usuario"] : null;
		$pass = isset($_POST["password"]) ? $_POST["password"] : null;

		// validamos que no esten vacios
		if (empty($user))
		{
			echo "no puede dejar el usuario vacio";
		}
		else if (empty($pass))
		{
			echo "no puede dejar la contraseña vacia";
		}
		else
		{
			// llamamos al metodo de login mediante la instancia usuarios
			$usr = new usuarios();
			$campo = $usr->login($user);

			// si es falta, es por que no encontro al usuario
			if ($campo == false)
			{
				echo "No se encontro al usuario $user";
			}
			// la contraseña coincide
			else if ($pass == $campo["contrasena"])
			{
				// crea la session con el valor del nombre del usuario de la bdd
				$_SESSION["puls4"] = $campo["id_user"];
				echo 1;
			}
			// no coincide el pass con el registro de la bdd
			else
			{
				echo "la contraseña es incorrecta";
			}
		}
	}
?>