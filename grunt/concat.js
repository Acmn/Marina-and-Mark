// grunt/concat.js 
module.exports = {
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
  }
};