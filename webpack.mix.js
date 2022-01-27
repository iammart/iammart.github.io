const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

// const webpack = {
//   stats: {
//     children: true
//   }
// }

mix
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require("tailwindcss"),
    ])
    .options({
        processCssUrls: false,
    })
    .version()
    // .webpackConfig(webpack)
    .jigsaw()
