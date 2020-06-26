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
    .ts('resources/ts/dashboard/app.ts', 'public/js/dashboard')
    .js('./node_modules/jquery/dist/jquery.js', 'public/js')
    .js('./node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js')
    .sass('resources/sass/dashboard/style.scss', 'public/css/dashboard')
    .version()
    .browserSync('127.0.0.1:8000');;
