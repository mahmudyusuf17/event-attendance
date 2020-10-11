const mix = require('laravel-mix');

const VueLoaderPlugin = require('vuetify-loader/lib/plugin');
const CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin');

mix.extend('vuetify', new class {
    webpackConfig (config) {
        config.plugins.push(new VueLoaderPlugin()),
        config.plugins.push(new CaseSensitivePathsPlugin())
    }
})
mix.vuetify()
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
