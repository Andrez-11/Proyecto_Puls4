$(document).ready(function()
{
	$("#btn-login").click(function()
	{
		var usuario = $("#user").val();
		var password = $("#pass").val();

		if (!usuario)
		{
			alert("usuario vacio");
		}
		else if (!password)
		{
			alert("contraseña vacia");
		}
		else
		{
			$.post("login1.php",
			{
				usuario: usuario,
				password: password

			}, function(resultado)
			{
				if (resultado == '1')
				{
					window.location.href = "index.php";
				}
				else
				{
					alert(resultado);
				}
			});
		}
	});
});