/**
 * Configuration options (RequireJS)
 * http://requirejs.org/docs/api.html#config
 */
require({
    name: 'main',
    packages: [
        {
            name: 'cs',
            location: '../bower_components/require-cs',
            main: 'cs'
        },
        {
            name: 'coffee-script',
            location: '../bower_components/coffee-script',
            main: 'index'
        }
    ],
    map: {
        '*': {
            css: '../bower_components/require-css/css'
        }
    },
    paths: {
        jquery: '../bower_components/jquery/jquery',
        bowser: '../bower_components/bowser/bowser'
    },
    shim: {
        bowser: {
            deps: ['jquery'],
            exports: 'bowser'
        }
    }
},

['cs!app/main'], function(App) {
    var app = new App();
    app.init();
});
