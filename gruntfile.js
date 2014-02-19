module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
              options: {
                style: 'expanded'
              },
                files: {
                    'scss/type.css': 'scss/type.scss',
                    'scss/layout.css': 'scss/layout.scss',
                    'scss/app.css': 'scss/app.scss'
                }
            }
        },

        concat: {
            dist: {
                src: [
                    'scss/type.css',
                    'scss/layout.css',
                    'scss/app.css'
                ],

                dest: 'scss/build.css',
            }
        },

        cssmin: {
            minify: {
                src: ['scss/build.css'],
                dest: 'scss/build.min.css'
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