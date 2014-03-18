module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            files: ['dev/theme.html', 'dev/js/*', 'dev/styles/*'],
            tasks: ['default'],
        },

        sass: {
            dist: {
              options: {
                style: 'expanded'
              },
                files: {
                    'dev/styles/css/type.css': 'dev/styles/type.scss',
                    'dev/styles/css/layout.css': 'dev/styles/layout.scss',
                    'dev/styles/css/app.css': 'dev/styles/app.scss'
                }
            }
        },

        concat: {
            sass: {
                src: [
                    'dev/styles/css/type.css',
                    'dev/styles/css/layout.css',
                    'dev/styles/css/app.css'
                ],

                dest: 'dev/styles/css/build.css',
            },

            javascript: {
                src: [
                    'dev/js/stroll.min.js',
                    'dev/js/slidr.min.js',
                    'dev/js/salvattore.min.js'
                ],

                dest: 'dist/app.js',
            }
        },

        cssmin: {
            sass: {
                src: ['dev/styles/css/build.css'],
                dest: 'dist/build.min.css'
            }
        },

        htmlmin: {
            themesquash: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {
                    'dist/theme.html': 'dev/theme.html'
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'concat', 'cssmin', 'htmlmin']);
    grunt.registerTask('auto', ['watch']);

};