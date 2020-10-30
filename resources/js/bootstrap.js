window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('owl.carousel/dist/assets/owl.carousel.css');
    require('owl.carousel/dist/assets/owl.theme.default.css');
    window.owlCarousel = require('owl.carousel');
    window.toastr = require('toastr');
    require('toastr/build/toastr.css')
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
