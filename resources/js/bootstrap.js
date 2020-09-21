window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    window.owlCarousel = require('owl.carousel');
    require('owl.carousel/dist/assets/owl.carousel.min.css');
    window.feather = require('feather-icons');
} catch (e) {}
