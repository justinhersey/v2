module.exports = function(grunt) {
  grunt.initConfig({

    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: [{
          expand: true,
          cwd: 'scss/',
          src: ['*.scss'],
          dest: 'build/css/',
          ext: '.css'
        }]
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif,svg}'],
          dest: 'build/images/'
        }]
      }
    },

    uglify: {
        build: {
            src: 'js/scripts.js',
            dest: 'build/js/scripts.min.js'
        }
    },

    autoprefixer : {
      options : {
        browsers : ['> 5%', 'last 2 version', 'ie 8', 'ie 9']
      },
      dist : {
        files : {
          'build/css/stylesheet.css' : 'build/css/stylesheet.css'
        }
      }
    },

    watch: {
      css: {
        files: 'scss/*.scss',
        tasks: ['sass']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass', 'imagemin']);
}