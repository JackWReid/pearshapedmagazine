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
                style: 'compact',
                loadPath: require('node-bourbon').includePaths
              },
                files: {
                    'style.css' : 'sass/app.scss'
                }
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass']);
    grunt.registerTask('auto', ['watch']);

};