// grunt/postcss.js 
module.exports = {
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
  }
};