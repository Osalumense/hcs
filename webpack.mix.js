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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.js("resources/js/app.js", "public/js")
    .copy("resources/css/bootstrap.min.css", "public/css")
    .copy("resources/css/style.css", "public/css")
    .copy("resources/assets/notiflix", "public/assets/notiflix")
    .copy("resources/css/bootstrap.min.css", "public/css")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);