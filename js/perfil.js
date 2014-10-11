$(document).ready(function()
{
	$("#btn-actualizar-perfil").click(function()
	{
		var usuario = $("#user").val();
		var alias = $("#alias").val();
		var correo = $("#correo").val();

		if (!usuario)
		{
			alert("usuario vacio");
		}
		else if (!alias)
		{
			alert("alias vacio");
		}
		else if (!correo)
		{
			alert("correo vacio");
		}
		else
		{
			$.post("actualizar_perfil.php",
			{
				user: usuario,
				alias: alias,
				correo: correo

			}, function(resultado)
			{
				alert(resultado);
			});
		}
	});
});