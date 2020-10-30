window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    const scrollReveal = require('./src/scrollreveal').default;
    require('./src/waypoints');
    require('./src/imgfix');
} catch (e) {}
