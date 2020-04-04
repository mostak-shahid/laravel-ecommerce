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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
     // 'resources/css/vendor/normalize.css',
        'public/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css',
        'public/assets/css/bootstrap.css',
        'public/assets/css/neon-core.css',
        'public/assets/css/neon-theme.css',
        'public/assets/css/neon-forms.css',
        'public/assets/css/custom.css'
    ], 'public/assets/css/all.css')
    /*.styles([
     // 'resources/css/vendor/normalize.css',
     'public/assets/css/font-icons/entypo/css/entypo.css'
     ], 'public/assets/css/fonts.css')*/
    .scripts([
        'public/assets/js/gsap/TweenMax.min.js',
        'public/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
        'public/assets/js/bootstrap.js',
        'public/assets/js/joinable.js',
        'public/assets/js/resizeable.js',
        'public/assets/js/neon-api.js',
        'public/assets/js/neon-custom.js'
    ], 'public/assets/js/all.js');
