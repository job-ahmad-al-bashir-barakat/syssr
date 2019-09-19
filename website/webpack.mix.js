const mix = require('laravel-mix');

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

mix
    .scripts([
        'resources/theme/js/scripts.js'
    ], 'public/js/scripts.min.js')
    .styles([
        'resources/theme/scss/styles.css',
        'resources/theme/scss/app.css',
    ], 'public/css/assets/styles.min.css');
