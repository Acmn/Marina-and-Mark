// grunt/uglify.js 
module.exports = {
  // UGLIFY
  uglify: {
    options: {
      banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
    },
    build: {
      src: 'build/production.js',
      dest: 'build/production.min.js'
    }
  }
};