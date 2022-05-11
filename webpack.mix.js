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
        require("postcss-import"),
        require("tailwindcss"),
    ])
    .options({
        processCssUrls: false,
    })
    .version()
    .jigsaw()
    // .webpackConfig(webpack)
    .browserSync({
        server: 'build_local',
        files: ['build_*/**'],
    });
