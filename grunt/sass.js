// grunt/sass.js 
module.exports = {
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
  }
};