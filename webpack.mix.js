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
//Con varios archivos
mix.scripts(['resources/assets/js/jquery.js',
	'resources/assets/js/bootstrap.js',
	'resources/assets/js/toastr.js',
	'resources/assets/js/vue.js',
	'resources/assets/js/axios.js',
	'resources/assets/js/app.js',], 'public/js/app.js')
.styles(['resources/assets/css/bootstrap.css',
	'resources/assets/css/toastr.css',
	'resources/assets/css/font-awesome.css'],'public/css/app.css');
//Con un solo archivo
// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
