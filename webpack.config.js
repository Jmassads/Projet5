const path = require('path');

module.exports = {
  entry :{
    app: './src/js/Front.js',
    adminApp: './src/js/Admin.js'
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