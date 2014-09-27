<?php

	include __DIR__ . "/clases/usuarios.class.php";

	if (isset($_POST["correo"]))
	{
		// Cachamos los valores desde login.js 
		$correo = isset($_POST["correo"]) ? $_POST["correo"] : null;

		// validamos que no esten vacios
		if (empty($correo))
		{
			echo "no puede dejar el correo vacio";
		}
		else
		{
			// llamamos al metodo de login mediante la instancia usuarios
			$usr = new usuarios();
			$campo = $usr->recuperar($correo);

			// si es false, es por que no encontro el correo en la bdd
			if ($campo == false)
			{
				echo "No se encontro el correo $correo";
			}
			else
			{
				// remitente
				$desde = "Puls4 <mail@puls4.com>";
				// encabezados para el correo que salga bien los acentos y el remitente
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
				$headers .= "From:" . $desde . "\r\n";

				// clave unica para recuperar el pass
				$token = md5(date("Y-m-d h:i:s") . rand(1, 2000));

				$recuperacion = $usr->recuperar_pass($campo["id_user"], $token);

				if ($recuperacion == true)
				{
					// contenido del correo
					$contenido = "Visita <a href=\"//puls4.com/recuperar-pass.php?token={$token}\">Recuperar</a>";
			  		
			  		// envia el correo al usuario
			  		$mail = mail($correo, "Recuperar puls4", $contenido, $headers);

			  		// verifica si se envio correctamente
			  		if ($mail)
			  		{
			  			echo "el correo ya ha sido enviado, revisa tu correo";
			  		}
			  		else
			  		{
			  			echo "no se pudo enviar el correo";
			  		}
				}
				else
				{
					echo "no se pudo insertar en recuperacion";	
				}
			}
		}
	}
?>