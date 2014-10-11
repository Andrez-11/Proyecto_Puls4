Diplomado.Router = Backbone.Router.extend({
	routes: {
		"" : "index",
		"articulo/:id_articulo" : "consulta_articulo"
	},
	initialize : function(){
		this.datos = {};
		this.postCollection = new Diplomado.Collections.PostCollection();
		this.postView = new Diplomado.Views.PostView({
								collection : this.postCollection});
		Backbone.history.start();
	},
	index : function(){
		console.log("Estás en el index");
		this.cargarDatos();
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
		var self = this;
		$(".post").remove(); //quitamos todos los post
		$.getJSON("allformated.json").then(function(data){
			self.datos = data;
			var postCompleto = new Diplomado.Views.PostCompleto({
				model : new Diplomado.Models.PostModel({
					id: id_articulo,
					titulo : data[id_articulo].title,
					contenido : data[id_articulo].content,
					autor: data[id_articulo].author,
					imagen : data[id_articulo].image,
					fecha : data[id_articulo].date,
					likes : data[id_articulo].likes,
					tags : data[id_articulo].tags,
					comentarios : data[id_articulo].comentarios
				})
			});

			postCompleto.render();
			$(".posts").append(postCompleto.$el);
		});
		/* 
			ir al servidor a obtener solo el articulo seleccionado en caso que se ingrese directamente
			si se ingresa desde el index, solo mandar el modelo...
			renderizar la vista correspondiente al articulo completo
				-titulo, autor, tags, CONTENIDO, etc
				- integrar los comentarios
		*/
	},
	cargarDatos : function(){
		self = this;//mi router
		$.getJSON("allformated.json").then(function(data){
			self.datos = data;
			for (var id in data){
				if (data.hasOwnProperty(id)){
					self.agregaModelo(id, data[id]);
				}
			}
		});
	},
	agregaModelo : function(id, post){
		this.postCollection.add(new Diplomado.Models.PostModel({
			id: id,
			titulo : post.title,
			contenido : post.content,
			autor: post.author,
			imagen : post.image,
			fecha : post.date,
			likes : post.likes,
			tags : post.tags,
			comentarios : post.comentarios
		}));
	}
});
window.ruta = new Diplomado.Router();
