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


mix.sass('resources/assets/sass/app.scss', 'public/css') .options({
      processCssUrls: false
   });

mix.browserSync({
       proxy: 'hmcastillo.dev'
   });

mix.copyDirectory('resources/assets/images', 'public/images');
mix.copyDirectory('node_modules/raleway-webfont/fonts', 'public/fonts/raleway');
mix.copyDirectory('node_modules/typeface-merriweather/files', 'public/fonts/merriweather');
mix.copyDirectory('node_modules/roboto-fontface/fonts/roboto', 'public/fonts/roboto');

mix.styles([
       'resources/assets/css/bootstrap.min.css',
       'resources/assets/css/magnific-popup.css',
       'resources/assets/css/normalize.css',
       'resources/assets/css/owl.carousel.css',
       'resources/assets/css/owl.theme.css',
       'resources/assets/css/responsive.css',
       'resources/assets/css/style.css'
   ], 'public/css/all.css');

// fix masonry problem
mix.scripts([
    'resources/assets/js/template/jquery-1.9.1.min.js',
    'resources/assets/js/template/jquery.appear.js',
    'resources/assets/js/template/bootstrap.min.js',
    'resources/assets/js/template/classie.js',
    'resources/assets/js/template/owl.carousel.min.js',
    'resources/assets/js/template/jquery.magnific-popup.min.js',
    // 'resources/assets/js/template/masonry.js',
    // 'resources/assets/js/template/masonry.pkgd.min.js',
    'resources/assets/js/template/smooth-scroll.min.js',
    'resources/assets/js/template/typed.js',
    'resources/assets/js/template/main.js',
], 'public/js/all.js');
// fix masonry problem
