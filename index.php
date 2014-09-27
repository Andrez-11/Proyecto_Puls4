<?php
		include('header.php');

?>
	<section class="posts">
		<article class="post" id="1">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> 
					<!-- <input type="hidden" name="id_post" value="1"/>asdasd-->
				</div>
			</div>
		 </article>
		 <article class="post" id="2">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> <!-- asdasd-->

				</div>
			</div>
		 </article>
		 <article class="post" id="3">
			<div class="generales">
				<div class="imagen">
					<img src="images/imagen.jpg">
				</div>

				<div class="detalles">
					<h2 class="titulo"><a href="#">Colores, gradientes y texto 3D con Sass y Compass</a></h2>
					<p class="autor">por <a href="#">Diana Reyes</a></p>
					<p class="tags">CSS3 <a href="#"></a></p>
					<p class="fecha">hace <strong>20</strong> min </p>
				</div>
			</div>

			<div class="acciones">
				<div class="votos">
					<a class="likes" href="#"></a>
					<p>156</p>
					<a class="nolikes" href="#"></a>
					</div>
				<div class="comenfavs">
					<a class="comentarios" href="#">10</a>
					<span class="nofavoritos" ></span> <!-- asdasd-->
				</div>
			</div>
		 </article>
	</section>
	<script>

//para BUSCAR FAV



// para PONER FAV
$(document).on("click",".nofavoritos",function()
		{
		$(document).on("click",".post", function(){
			var id= $(this).attr("id");
			$.post("favoritos/insertar_like.php","id_post="+id,function(resultado){
						alert('');
						$(this).toggleClass(""+resultado+"");
					
					});
		});//para obtener id del post	
	}); //cierra funcion.post

// para QUITAR FAV
$(document).on("click",".favoritos",function()
		{
		var id_fav= $(this).attr("id");	
		$(document).on("click",".post", function(){
			var id= $(this).attr("id");
			alert(id);
			
			$.post("favoritos/modificar_like.php","id_post="+id,function(resultado){
						alert(resultado);
						$(this).toggleClass(""+resultado+"");
					
					});
		});//para obtener id del post	
	}); //cierra funcion.post

	
	/*


	$(document).on("click",".post", function(){
		var id= $(this).attr("id");
		$(document).on("click",".favoritos",function()
		{
			$.post("favoritos/listar_favoritos.php","id_post="+id,function(resultado){
				if (resultado==1)
					{
						//para insertar

						$(this).addClass('favoritos nofavoritos');
					}

				else if(resultado==0)
					{

						//para eliminar
						$(this).toggleClass('nofavoritos favoritos');
					}
					
					});
				});//para obtener id del post

	
			
		}); //cierra otra funcion?

*/





	</script>
<?php 
			include('footer.php');

?>
<script>
/*$(document).ready(function(){
		$.post("favoritos/listar_favoritos.php","",function(resultado){  // ejecuta el archivo sin parametros y arroja codigo html
		$(".posts").html(resultado);//almacenalo en la funcion para modificar su contenido html del objeto #listado
	});


});*/
</script>


<!--shift control arriba o abajo para mover el texto hacia arriba junto-->