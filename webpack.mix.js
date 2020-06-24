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
    .sass('resources/sass/dashboard/style.scss', 'public/css/dashboard')
    .version()
    .browserSync('127.0.0.1:8000');;
