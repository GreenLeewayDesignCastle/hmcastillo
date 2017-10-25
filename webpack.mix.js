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

mix.js([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/jquery.appear/jquery.appear.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/template/classie.js',
    'node_modules/magnific-popup/dist/jquery.magnific-popup.js',
    'node_modules/masonry-layout/masonry.js',
    'node_modules/masonry-layout/dist/masonry.pkgd.js',
    'resources/assets/js/template/main.js',
], 'public/js/app.js');
