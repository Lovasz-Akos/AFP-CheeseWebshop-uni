const mix = require('laravel-mix');
const glob = require('glob');
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
//<editor-fold desc="Pattern matching for globify function">
const files = pattern => glob.sync(pattern, { cwd: 'resources/sass' });

const globify = (pattern, out, mixFunctionName) => {
    files(pattern).forEach((path) => {
        mix[mixFunctionName](`resources/sass/${path}`, out);
    })
};
//</editor-fold>

mix.sass('resources/sass/app.sass', 'public/css/app.css');
globify('**/mix_*.sass', 'public/css', 'sass');
mix.js('resources/js/*.js', 'public/js/app.js');
