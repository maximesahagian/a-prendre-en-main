const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass('homepage.scss');
});

elixir(mix => {
    mix.sass('team.scss');
});

elixir(mix => {
    mix.sass('contact.scss');
});

elixir(mix => {
    mix.sass('crowfunding.scss');
});

elixir(mix => {
    mix.sass('explications.scss');
});

elixir(mix => {
    mix.sass('footer.scss');
});

elixir(mix => {
    mix.sass('adminpage.scss');
});

elixir(mix => {
    mix.sass('news.scss');
});

elixir(mix => {
    mix.sass('loginpage.scss');
});