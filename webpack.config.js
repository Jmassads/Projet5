const path = require('path');

module.exports = {
  entry :{
    homepage:'./src/js/Homepage.js',
    frontpages: './src/js/AllFrontPages.js',
    adminBundle: './src/js/Admin.js'
  },
  output: {
    filename: '[name].js',
    path: __dirname + '/build/js'
  },
  module: {
    rules: [{
      test: /\.js?$/,
      exclude: /node_modules/,
      loader: "babel-loader",
      query: {
        presets: ["env"]
      }
    }]
  },
  mode: "development"
}