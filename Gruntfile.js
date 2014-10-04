/*
npm install grunt
npm install grunt-contrib-stylus
npm install grunt-contrib-uglify
npm install grunt-contrib-concat

crear éste archivo llamado Gruntfile.js
ejecutar la instruccion grunt y esperar la magia...

*/
module.exports = function(grunt) {
//configuracion inicial del grunt
grunt.initConfig({
  //queremos leer la informacion de un archivo json (el nombre de la app)
  pkg : grunt.file.readJSON("package.json"), 
  //configuramos los modulos formato:
  /* 
    modulo:{},
    modulo:{},
    ...
  */
  //configuramos el modulo concat
  concat : {
    dist:{
      src: ['js/**/*.js'],  //buscamos todos los archivos .js
      dest:'js/<%=pkg.name %>.js', //que serán escritos en un solo archivo .js
      separator: ";" //separados por un ";"
    }
  },
  //configuramos el modulo uglify
  uglify: {
    options:{
      //agregamos un comentario al inicio del archivo para saber la version del mismo
      banner : "/*! <%=pkg.name%> <%= grunt.template.today('dd-mm-yyyy') %> */\n"
    },
    dist:{
      files:{
        //indicamos como se llamará el archivo final y de donde lo generará
        "js/<%=pkg.name %>.min.js" : ['<%= concat.dist.dest %>']
      }
    }
  },
  //configuramos el paquete stylus
  stylus: {
      compile: {
          files: {
            //le decimos que compile todos los archivos styl y los guarde en un
            //archivo que se llame como le pusimos a la app .css
            "css/<%= pkg.name %>.css" : ["css/*.styl"] 
          }
      }
  }
});

//cargamos los modulos para que sepa de donde obtener las tareas
grunt.loadNpmTasks('grunt-contrib-stylus');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-concat');
//indicamos a grunt que tareas tiene que ejecutar por default... 
//si no se incluye ésta linea se pueden mandar llamar desde consola como:
//grunt tarea. p.ej
//grunt stylus
//grunt uglify
grunt.registerTask("default",["stylus","concat","uglify"]);


};
