// grunt/cssmin.js 
module.exports = {
	// CSSMIN
  cssmin: {
    combine: {
      files: {
        'build/mini-theme.css': ['src/css/prefixed/theme.css']
      }
    }
  }
 };