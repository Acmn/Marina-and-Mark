// Grunt Module
module.exports = function(grunt) {
  // Configuration
  grunt.initConfig({
    // Get package meta data
    pkg: grunt.file.readJSON('package.json'),
    // Watch
    watch: {
      scripts: {
        files: [
        'src/js/**/*.js'
        //,'tasks/*.js'
        ],
      tasks: ['concat','uglify','notify'],
      options: {
        spawn: false,
      }
    },
      css: {
        files: ['src/scss/**/*.scss'],
        tasks: ['sass','postcss','cssmin','notify'],
        options: {
          spawn: false,
        }
      },
    //   html:{
    //     files: ['./**/*.php'],
    //     tasks: [],
    //     options: {
    //       spawn: false
    //     }
    //   }
      options: {
        livereload: true,
      },
    },
  // Load tasks
  // CONCAT
  concat: {
    dist: {
      src: [
      'src/js/libs/*.js',
      //add links additional theme related js files here - files should be included in the src/js/libs/ folder.
      //The file below will load last
      'src/js/main.js'
      ],
      dest: 'build/production.js'
    }
  },
  // UGLIFY
  uglify: {
    options: {
      banner: '/*! <%= pkg.name %>-v<%= pkg.version %> (<%= pkg.repository.url %>) ' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    build: {
      src: 'build/production.js',
      dest: 'build/production.min.js'
    }
  },
  // SASS
  sass: {
    dist: {
      options: {
        // cssmin will minify later
        style: 'expanded'
      },
      files: {
        'src/css/theme.css': ['src/scss/theme.scss']
      }
    }
  },
  // POSTCSS / AUTOPREFIXER
  postcss: {
    options: {
      map: true,
      processors: [
          require('autoprefixer')({
              browsers: ['last 2 versions']
          })
      ]
    },
    dist: {
      files: {
        'src/css/prefixed/theme.css' : ['src/css/theme.css']
      }
    }
  },
  // CSSMIN
  cssmin: {
    combine: {
      files: {
        'build/mini-theme.css': ['src/css/prefixed/theme.css']
      }
    }
  },
  // NOTIFY
  notify: {
    default: {
      options: {
        title: 'Task Complete',  // optional 
        message: '<%= pkg.name %> build finished successfully.', //required 
      }
    },
    watch: {
      options: {
        title: 'WATCHING',  // optional 
        message: '<%= pkg.name %> build finished successfully.', //required 
      }
    }
  }
});

  // Load the plugins that provide the tasks. Loaded by reading the package.json file
  require('load-grunt-tasks')(grunt);

  // Default task(s). We can register tasks. 
  // Do so by adding grunt.registerTask('default',['*tasks you want to run*']);
  // the 'default' task is what gets run when you type grunt in the commandline, you can also set an array of tasks you want to run when this is done, ['sass','jshint','uglify'].
  grunt.registerTask('default', ['concat','uglify','sass','postcss:dist','cssmin']);
  grunt.registerTask('dev', ['watch', 'notify']);
};