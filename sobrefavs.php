	<script>
//para BUSCAR FAV
/*$document.ready(function(){
		$.post("listar_favoritos.php","",function(resultado){

	
		});

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
<script>
/*$(document).ready(function(){
		$.post("favoritos/listar_favoritos.php","",function(resultado){  // ejecuta el archivo sin parametros y arroja codigo html
		$(".posts").html(resultado);//almacenalo en la funcion para modificar su contenido html del objeto #listado
	});


});*/
</script>