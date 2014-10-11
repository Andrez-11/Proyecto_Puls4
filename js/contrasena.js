$(document).ready(function()
{
	$("#btn-actualizar-contrasena").click(function()
	{
		var contrasena_actual = $("#contrasena-actual").val();
		var contrasena_nueva = $("#contrasena-nueva").val();
		var contrasena_conf = $("#contrasena-conf").val();

		if (!contrasena_actual)
		{
			alert("actual vacia");
		}
		else if (!contrasena_nueva)
		{
			alert("nueva vacia");
		}
		else if (!contrasena_conf)
		{
			alert("confirmacion vacia");
		}
		else
		{
			$.post("actualizar_contrasena.php",
			{
				contrasena_actual: contrasena_actual,
				contrasena_nueva: contrasena_nueva,
				contrasena_conf: contrasena_conf

			}, function(resultado)
			{
				if (resultado == '1')
				{
					$("#contrasena-actual").val('');
					$("#contrasena-nueva").val('');
					$("#contrasena-conf").val('');
					alert("tu contraseña se ha cambiado correctamente");
				}
				else
				{
					alert(resultado);
				}
			});
		}
	});
});