const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
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
mix.webpackConfig( {
    plugins: [
        new ImageminPlugin({
            disable: process.env.NODE_ENV !== "production",
            pngquant: {
                quality: '95-100'
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        }),
    ]
})

mix.js("resources/js/app.js", "public/js")
    .react()
    .sass("resources/css/app.scss", "public/css")
    .copy("resources/images", "public/images")
