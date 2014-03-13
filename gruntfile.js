module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
              options: {
                style: 'expanded'
              },
                files: {
                    'scss/css/type.css': 'scss/type.scss',
                    'scss/css/layout.css': 'scss/layout.scss',
                    'scss/css/app.css': 'scss/app.scss'
                }
            }
        },

        concat: {
            sass: {
                src: [
                    'scss/css/type.css',
                    'scss/css/layout.css',
                    'scss/css/app.css'
                ],

                dest: 'scss/css/build.css',
            },

            vanilla: {
                src: [
                    'css/reset.css',
                    'css/type.css',
                    'css/layout.css',
                    'css/app.css'
                ],

                dest: 'css/build/build.css',
            },

            javascript: {
                src: [
                    'js/stroll.min.js',
                    'js/slidr.min.js',
                    'js/salvattore.min.js'
                ],

                dest: 'js/app.js',
            }
        },

        cssmin: {
            sass: {
                src: ['scss/css/build.css'],
                dest: 'scss/build/build.min.css'
            },

            vanilla: {
                src: ['css/build/build.css'],
                dest: 'css/build/build.min.css'
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'concat', 'cssmin']);

};