module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            files: ['sass/*'],
            tasks: ['default']
        },

        sass: {
            dist: {
              options: {
                style: 'compressed',
              },
                files: {
                    'sass/build.css' : 'sass/app.scss'
                }
            }
        },

        concat: {
            dist: {
                src: ['sass/head.css', 'sass/build.css'],
                dest: 'style.css'
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'concat']);
    grunt.registerTask('auto', ['watch']);

};