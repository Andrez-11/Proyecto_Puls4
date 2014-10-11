Diplomado.Views.SinglePost =  Backbone.View.extend({
	template : Handlebars.compile($("#PostTemplate").html()),
	render : function(){
		this.$el.append(this.template(this.model.toJSON()));
	}
});