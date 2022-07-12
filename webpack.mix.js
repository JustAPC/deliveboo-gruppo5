const mix = require("laravel-mix");

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

mix
  .js("resources/js/app.js", "public/js")
  .js("resources/js/front.js", "public/js")
  .js("resources/js/routes.js", "public/js")
  .js("resources/js/imageUpload.js", "public/js")
  .js("resources/js/deleteAlert.js", "public/js")
  .js("resources/js/orderDeleteAlert.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .sass("resources/sass/_create.dishes.scss", "public/css")
  .sass("resources/sass/orderIndex.scss", "public/css")
  .sass("resources/sass/partials/bgMulticolor.scss", "public/css")
  .options({
    processCssUrls: false,
  });
