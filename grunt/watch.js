// grunt/watch.js 
module.exports = {
  // Watch
  watch: {
    scripts: {
      files: [
      'src/js/**/*.js'
      //,'tasks/*.js'
      ],
    tasks: ['concat','uglify'],
    options: {
      spawn: false,
    }
  },
    css: {
      files: ['src/scss/**/*.scss'],
      tasks: ['sass','cssmin'],
      options: {
        spawn: false,
      }
    }
    options: {
      livereload: true,
    },
  }
};