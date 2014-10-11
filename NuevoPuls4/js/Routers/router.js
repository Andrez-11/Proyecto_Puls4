Diplomado.Router = Backbone.Router.extend({
	routes: {
		"" : "index",
		"articulo/:id_articulo" : "consulta_articulo"
	},
	initialize : function(){
		Backbone.history.start();
	},
	index : function(){
		console.log("Estás en el index");
		//to do...
		/* 
			ir al servidor a consultar mi bd de articulos
			generlos en json
			Crear modelos
			agregarlos a la coleccion
			renderizar cada uno
			agregarlos al body
		*/
	},
	consulta_articulo : function(id_articulo){
		console.log("Quieres ver el articulo: "+id_articulo);
		/* 
			ir al servidor a obtener solo el articulo seleccionado en caso que se ingrese directamente
			si se ingresa desde el index, solo mandar el modelo...
			renderizar la vista correspondiente al articulo completo
				-titulo, autor, tags, CONTENIDO, etc
				- integrar los comentarios
		*/
	}
});
var ruta = new Diplomado.Router();
