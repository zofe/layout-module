let mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('./');
mix.js("resources/js/layout.js", "public")
    .sass('resources/scss/styles.scss', 'public')
    .sourceMaps(true, 'source-map')
    .copy('public/*', '../../../public/vendor/layout/')
    .copyDirectory('public/img', '../../../public/vendor/layout/img');
