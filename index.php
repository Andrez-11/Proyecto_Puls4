<?php
		include('header.php');

?>
	<section class="posts">
		
	</section>
	<script>
		$.get("posts/listPosts.php", function(data){
			var json = $.parseJSON(data);
			for (var id in json) {
			  if (json.hasOwnProperty(id)) {
			    console.log(json[id]);
			    $.post("posts/article.php",json[id],function(data){
			    	$("section.posts").append(data);
			    });
			  }
			}
		});
	</script>
	<script>
//para BUSCAR FAV
/*$document.ready(function(){
		$.post("listar_favoritos.php","",function(resultado){

	
		});


//para BUSCAR FAV



			/* para clasificar por tema los post 
			$(document).on("click",".menu a",function(){
		var tema= $(this).attr("id");
		$.post("posts/listPostTemas.php","tema="+tema, function(data){
			var json = $.parseJSON(data);
			for (var id in json) {
			  if (json.hasOwnProperty(id)) {
			    console.log(json[id]);
			    $.post("posts/article.php",json[id],function(data){
			    	$("section.posts").append(data);
			    });
			  }
			}
			});
		});*/
		
			//Para ver los comentarios de cada post
		$(document).on("click",".comentarios",function(){
			var id_post= $(this).attr("id");
			$(location).attr('href', "comentarios/comentarios.php?id_post="+id_post);		
			});

		//para BUSCAR FAV


/*

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