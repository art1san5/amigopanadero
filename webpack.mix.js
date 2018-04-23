let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    // 'node_modules/foundation-sites/dist/css/foundation.min.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    // 'node_modules/semantic-ui-css/semantic.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/select2.min.css',
    // 'resources/assets/fonts/fonts.css',
    // 'resources/assets/css/foundation/foundation.min.css',
], 'public/css/all.css')
.styles([
    'resources/assets/css/cover.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
],'public/css/cover.css')
.js([
    'resources/assets/js/app.js',
    // 'resources/assets/js/foundation/vendor/foundation.min.js',
    // 'resources/assets/js/foundation/vendor/what-input.js',
    // 'node_modules/foundation-sites/dist/js/foundation.min.js',
    // 'node_modules/semantic-ui-css/semantic.min.js',
    'node_modules/popper.js/dist/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'resources/assets/js/select2.min.js',
    ], 'public/js/all.js');
