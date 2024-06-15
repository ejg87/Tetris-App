const mix = require('laravel-mix');

/*
 |----------------------------------------------------------------
 | Mix Asset Management
 |----------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Enable Vue support
mix.js('resources/js/app.js', 'public/js').vue() // This tells Mix to handle .vue files
   .sass('resources/sass/app.scss', 'public/css');


// Add versioning to the compiled files (good practice for production)
if (mix.inProduction()) {
    mix.version();
}

// Set public path to public (this is usually the default)
mix.setPublicPath('public');
