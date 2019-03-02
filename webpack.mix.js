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

mix.js('resources/js/app.js', 'public/js/app.min.js')
   .sass('resources/sass/app.scss', 'public/css');
//  
mix.js('resources/js/main.js', 'public/js/main.min.js');  
mix.sass('resources/sass/style.scss', 'public/css/vendor');
mix.styles([
    'resources/css/vendor/style.css',
    'resources/css/vendor/naviki.css',
    'resources/css/vendor/fons.css'
    ], 'public/css/all.css');
mix.js('node_modules/jquery/src/jquery.js',  'public/js/vendor.js');
