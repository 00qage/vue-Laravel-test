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
mix.browserSync({
    proxy: 'localhost:8000',
    //open: false, // 當執行時是否要開啟瀏覽器
});


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
