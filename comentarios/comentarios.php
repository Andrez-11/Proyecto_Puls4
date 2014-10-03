<?php
			include("../header.php");
			echo "<input type='hidden' name='user' id='user' value='".$_SESSION["id_user"]."'>";
			echo "<input type='hidden' name='post' id='post' value='".$_GET["id_post"]."'>";
		?>

		<div id="contenedor">
			<div id="comentarios">
			</div>

			<form id="insertar" action="" method="POST" accept-charset="utf-8">
				<div id="agregar">
					<textarea class="icomment" rows="2" cols="50" name="contenido" placeholder="Agrega tu Comentario"></textarea>
					<input type="button" id="comentar" value="Comentar">
				</div>
				<hr>
				<label for="busca" id="lbusca">Buscar</label>
				<input type="text" name="busca" id="busca" value="" placeholder="Texto a Buscar">
			</form>

		</div>

		<?php
			include("../footer.php");			
		?>

		<script>
			function lista(){
				$.post("comentarios/buscar.php",$("#insertar").serialize(),function(resultado){
					$("#comentarios").html(resultado);
				});
			}
			lista();

			$(document).on("click","#comentar",function(){
				$.post("comentarios/insertar.php",$("#insertar").serialize(),function(resultado){
					alert(resultado);
					lista();
					$("#insertar textarea").val("");
					$("#insertar textarea").focus();
				});
			});

			$(document).on("keyup","#busca",function(){
				$.post("comentarios/buscar.php",$("#insertar").serialize(),function(resultado){
					$("#comentarios").html(resultado);
				});
			});

			$(document).on("click",".contenido",function(){
				var idusr = $(this).attr("title");
				var usr = $("#user").attr("value");

				if (idusr==usr) {
					var id = $(this).attr("id");
					var txt = $(this).attr("value");
					$(this).html("<input type='text' name='comen' id='comen' value='"+txt+"'/>");
					$("#insertar").append("<input type='hidden' name='clave' id='clave' value='"+id+"'>");
					$("#comen").focus();
					
					$("#comen").change(function(){
						var nc = $("#comen").val();
						$("#insertar").append("<input type='hidden' name='ncomen' id='ncomen' value='"+nc+"'>");
						$.get("actualizar.php",$("#insertar").serialize(),function(resultado){
							alert(resultado);
							lista();
						});
					});
					$("#comen").blur(function(){
						lista();
					});
				}
				else
				{
					alert("Este comentario no puedes modificarlo, ya que no eres el Propietario");
				}
			});

			$(window).scroll(function(){
			    if (($(window).scrollTop()+$("footer").height()+$(".comment").last().height()) >= ($(document).height())-$(window).height()){
			        document.getElementById("insertar").style.bottom="9em";
			    }
			    else
			    {
			    	document.getElementById("insertar").style.bottom="0em";
			    }	
			});

		</script>
	</body>
</html>