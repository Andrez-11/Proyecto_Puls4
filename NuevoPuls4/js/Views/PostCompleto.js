Diplomado.Views.PostCompleto = Backbone.View.extend({
	template : Handlebars.compile($("#postCompletotpl").html()),
	render : function(){
		this.$el.append(this.template(this.model.toJSON()));
	},
	events:{
		"click .regresar" : "index"
	},
	index : function(){
		$(".completo").remove();
		ruta.navigate("",{trigger: true});
	}
});