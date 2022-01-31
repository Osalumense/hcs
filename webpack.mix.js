const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/aos.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js')
    .js('resources/js/purecounter.min.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .js('resources/js/swiper.min.js', 'public/js')
    // .copyDirectory("resources/js", "public/js")
    .copy("resources/css/style.css", "public/css")
    .copy("resources/css/bootstrap.min.css", "public/css")
    .copy("resources/css/aos.min.css", "public/css")
    .copyDirectory("resources/img", "public/img")
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);

if (mix.inProduction()) {
    mix.version();
}
