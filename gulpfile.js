var elixir = require('laravel-elixir');
var bower = './bower_components/';
var res = './resources/assets/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass([
            'app.scss'
        ], res + 'css/app.css')

        .styles([
            bower + 'material-design-lite/material.min.css',
            'material.deep_orange-deep_purple.min.css',
            'app.css',
        ], 'public/css/app.css')

        .scripts([
            bower + 'material-design-lite/material.min.js',
            'app.js',
        ], 'public/js/app.js')

        .copy(
            bower + 'material-design-icons/iconfont',
            './public/fonts'
        )

        .version([
            'css/app.css',
            'js/app.js'
        ]);


});
