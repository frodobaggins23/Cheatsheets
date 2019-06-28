const path = require('path');

 

module.exports = {

  entry: './src/index.js',  //your root js file should named like this

  output: {

    path: path.join(__dirname, 'public'),

    filename: 'bundle.js' //this is file into which it will be compiled

  },

  module: {

    rules: [
      {

        test: /\.jsx?$/,
      
        loader: 'babel-loader',
      
        query: {
      
          presets: ['@babel/preset-env', '@babel/preset-react']
      
        }
      
      },
      {

        test: /\.css$/,

        use: ['style-loader','css-loader']

      },
      { //this is only in case you installed a SASS compiler

        test: /\.scss$/,

        use: ['style-loader','css-loader', 'sass-loader']

      },

      { 

        test: /\.(png|jpe?g|svg)$/,

        use: [

          {

            loader: 'file-loader',

            options: {

               name: '[name]-[hash:6].[ext]',

               outputPath: 'img'

            }

          }

        ]

      },

      { 

        test: /\.html$/,

        use: [

          {

            loader: 'file-loader',

            options: {

               name: '[name].[ext]',

               outputPath: ''

            }

          }

        ]

      }

    ]

  }

}