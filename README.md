# Modulo Layout


Questo modulo è stato creato per isolare gli asset statici, e i template principali dell'applicazione UaniaDesk.

L'idea è quella di replicare velocemente una applicazione laravel con un preset "bootstrap" già in linea graficamente e funzionalmente con UaniaDesk

### Rotte di test

esistono due rotte per testare il layout

- /layout/test-admin
- /layout/test-auth

La prima è seconda protetta da autenticazione e si riferisce al layout "interno all'admin".

La seconda non è protetta e si riferisce alle pagine pubbliche (es. la login, ecc...)


### Compilare le risorse statiche del layout

il modulo ha webpack/laravel mix può compilare scss e ed eventuali moduli javascript e copiarli nella cartella public /public/vendor/layout 
con il comando:

```
npm run dev 
```

per eventuale dettaglio o adattamento editare il file di mix
```
let mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('./');
mix.js("resources/js/layout.js", "public")
    .sass('resources/scss/styles.scss', 'public')
    .sourceMaps(true, 'source-map')
    .copy('public/*', '../../../public/vendor/layout/');

```




