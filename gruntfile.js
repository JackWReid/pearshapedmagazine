module.exports = function (grunt) {
  grunt.initConfig({

    watch: {
        styles: {
            files: ['dev/**'],
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

    // SCSS linter only called on 'lint' task
    scsslint: {
      allFiles: [ 'sass/*.scss' ],
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-scss-lint');

  grunt.registerTask('default', ['sass']);
  grunt.registerTask('lint', ['scsslint']);
  grunt.registerTask('auto', ['watch']);
};