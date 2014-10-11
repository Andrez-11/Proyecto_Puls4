Diplomado.Views.PostView = Backbone.View.extend({
	tagName:"article", 
	className:"post",
	template : Handlebars.compile($("#PostTemplate").html()),
	initialize : function(){},
	render : function(){
				var salida = this.template(this.model.toJSON());
				this.$el.append(salida);
	}
});