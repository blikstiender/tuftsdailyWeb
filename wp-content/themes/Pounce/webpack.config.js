var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: './js/main.jsx',
    resolve: {
        enforceExtension: false, 
        extensions: [".js", ".jsx"]
    },
    output: {
        path: path.resolve(__dirname, 'build'),
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.jsx$/,
                loader: 'babel-loader',
                query: {
                    presets: ['es2015', 'react'],
                }
            }, 
            {
                test: /\.scss$/,
                loaders: ExtractTextPlugin.extract('css-loader!sass-loader')
            }
        ], 

    },
    stats: {
        colors: true
    }, 
    plugins: [
        new ExtractTextPlugin('style.css')
    ]
};