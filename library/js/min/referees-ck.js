var Theater={Models:{},Collections:{},Views:{},Templates:{}};Theater.Models.Movie=Backbone.Model.extend({}),Theater.Collections.Movies=Backbone.Collection.extend({model:Theater.Models.Movie,url:templateDir+"/library/data/movies.json",initialize:function(){console.log("Movies initialize")}}),Theater.Templates.movies=_.template($("#tmplt-Movies").html()),Theater.Views.Movies=Backbone.View.extend({el:$("#mainContainer"),template:Theater.Templates.movies,initialize:function(){this.collection.bind("reset",this.render,this),this.collection.bind("add",this.addOne,this)},render:function(){console.log("render"),console.log(this.collection.length),$(this.el).html(this.template()),this.addAll()},addAll:function(){console.log("addAll"),this.collection.each(this.addOne)},addOne:function(e){console.log("addOne"),view=new Theater.Views.Movie({model:e}),$("#mainContainer").append(view.render())}}),Theater.Templates.movie=_.template($("#tmplt-Movie").html()),Theater.Views.Movie=Backbone.View.extend({tagName:"div",template:Theater.Templates.movie,initialize:function(){this.model.bind("destroy",this.destroyItem,this),this.model.bind("remove",this.removeItem,this)},render:function(){return $(this.el).addClass("col-md-4").append(this.template(this.model.toJSON()))},removeItem:function(e){console.log("Remove - "+e.get("Name")),this.remove()}}),Theater.Router=Backbone.Router.extend({routes:{"":"defaultRoute"},defaultRoute:function(){console.log("defaultRoute"),Theater.movies=new Theater.Collections.Movies,new Theater.Views.Movies({collection:Theater.movies}),Theater.movies.fetch(),console.log(Theater.movies.length)}});var appRouter=new Theater.Router;Backbone.history.start();