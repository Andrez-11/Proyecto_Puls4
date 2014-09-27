$(document).ready(function()
{
	$("#btn-recuperar").click(function()
	{
		var correo = $("#correo").val();

		if (!correo)
		{
			alert("correo vacio");
		}
		else
		{
			$.post("recuperar-enviar.php",
			{
				correo: correo

			}, function(resultado)
			{
				alert(resultado);
			});
		}
	});
});