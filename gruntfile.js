module.exports = function (grunt) {
  grunt.initConfig({

    watch: {
        styles: {
            files: ['sass/**'],
            tasks: ['sass', 'autoprefixer'],
        }
    },

    // Sass processor renders straight out to the dist build
    sass: {
        dist: {
            options: {
                style: 'compressed'
            },
            files: {
                'sass/build.css': 'sass/app.scss',
            }
        }
    },

    autoprefixer: {
      styles: {
        src: 'sass/build.css',
        dest: 'style.css',
      },
    },

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');

  grunt.registerTask('default', ['sass', 'autoprefixer']);
  grunt.registerTask('auto', ['watch']);
};