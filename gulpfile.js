var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.styles([
        'libs/morris.css',
        'libs/jquery-ui.css',
        'libs/bootstrap-timepicker.min.css'
    ]);

    mix.scripts([
        'libs/jquery.min.js',
        'libs/jquery-ui.min.js',
        'libs/bootstrap.min.js'
    ]);
});
