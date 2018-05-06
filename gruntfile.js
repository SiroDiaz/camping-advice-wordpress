module.exports = function(grunt){


    grunt.initConfig({

            pkg: grunt.file.readJSON('package.json'),
		
		/**
         * Concat
         */
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/**/custom.js'],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },
        
        /**
         * Uglify
         */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dist: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            }
        },

            /**
             * sass Task
             */
            sass:{

                dev:{
                    options:{
                            style:"expanded",
                            sourcemap:'auto'
                    },

                    files:{
<<<<<<< HEAD
                            'style.css':'css/style.scss'
=======
                            'camping-advice-wordpress/css/main.css':'camping-advice-wordpress/css/main.scss'
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42
                            /*where file goes-----/where file from*/
                    }
                },

                    dist:{
                        options:{
                                style:"compressed",
                                sourcemap:'auto'
                        },
                        files:{
<<<<<<< HEAD
                            'css/style-min.css':'css/style.scss'
=======
                            'camping-advice-wordpress/main-min.css':'camping-advice-wordpress/css/main.scss'
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42
                                /*where file goes-----/where file from*/
                        }
                    }
                },
		
              /**
         * QUnit
         */

        qunit: {
            files: ['test/**/*.html']
        },

        /**
         * JS Hint
         */
        jshint: {
<<<<<<< HEAD
            files: ['Gruntfile.js', 'js/**/*.js', 'test/**/*.js'],
=======
            files: ['Gruntfile.js', 'camping-advice-wordpress/js/**/*.js', 'test/**/*.js'],
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42
            options: {
                // options here to override JSHint defaults
                
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },

            watch:{

                css:{
<<<<<<< HEAD
                        files:'css/**/*.scss',
=======
                        files:'camping-advice-wordpress/**/*.scss',
>>>>>>> aa6f18f202d16c01773934c7be91883c8cfc8f42
                        tasks:['sass']
                }
            }


    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-concat');
	
	grunt.registerTask('test', ['jshint', 'qunit']);
   
   grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify']);
   grunt.registerTask('default', ['sass', 'watch']);
	
	


}

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/