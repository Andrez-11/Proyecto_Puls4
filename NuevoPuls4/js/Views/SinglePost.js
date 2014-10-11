Diplomado.Views.SinglePost =  Backbone.View.extend({
	template : Handlebars.compile($("#PostTemplate").html()),
	render : function(){
		this.$el.append(this.template(this.model.toJSON()));
	},
	events: {
		"click .post .generales .detalles .titulo a" : "muestra_post"
	},
	muestra_post : function(evento){
		if (evento.target.id == this.model.get("id")){
			ruta.navigate("articulo/"+this.model.get("id"), {trigger:true});
		}
	}
});