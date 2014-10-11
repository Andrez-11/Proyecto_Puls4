Diplomado.Views.PostView = Backbone.View.extend({
	el : $(".posts"),
	initialize : function(){
		this.listenTo(this.collection, "add",this.agregaPost, this);
	},
	render : function(){
				var salida = this.template(this.model.toJSON());
				this.$el.append(salida);
	},
	agregaPost : function(post){
		var singlePost = new Diplomado.Views.SinglePost({
			model : post,
			el : this.$el
		});
		singlePost.render();
		this.$el.append(singlePost.el);
	}
});

