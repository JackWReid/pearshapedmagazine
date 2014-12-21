module.exports = function (grunt) {
  grunt.initConfig({

    watch: {
        styles: {
            files: ['sass/**'],
            tasks: ['sass'],
        }
    },

    // Sass processor renders straight out to the dist build
    sass: {
        dist: {
            options: {
                style: 'compressed'
            },
            files: {
                'style.css': 'sass/app.scss',
            }
        }
    },

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['sass']);
  grunt.registerTask('auto', ['watch']);
};