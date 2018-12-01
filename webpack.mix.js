let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset M anagement
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/font-awesome.min.css',
    'resources/css/simple-line-icons.min.css',
    'resources/css/style.css'
], 'public/css/plantilla.css')
.scripts([
    'resourcesjs/jquery.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/Chart.min.js',
    'resources/js/pace.min.js',
    'resources/js/template.js',
    'resources/js/sweetalert2.all.js'
], 'public/js/plantilla.js')
.js(['resources/js/app.js'],'public/js/app.js');