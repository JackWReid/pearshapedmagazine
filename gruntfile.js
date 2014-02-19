module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist: {
                src: [
                    'css/reset.css',
                    'css/type.css',
                    'css/layout.css',
                    'css/app.css'
                ],

                dest: 'css/build.css',
            }
        },

        cssmin: {
            minify: {
                //expand: true,
                //cwd: 'release/css/',
                src: ['css/build.css'],
                dest: 'css/build.min.css'
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'cssmin']);

};