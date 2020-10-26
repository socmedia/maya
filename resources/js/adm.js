window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap/dist/js/bootstrap.bundle');
    require('admin-lte/plugins/jquery-ui/jquery-ui')
    require('admin-lte/dist/js/adminlte')
    require('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4')
    require('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars')
    require('admin-lte/dist/js/pages/dashboard')
    require('admin-lte/dist/js/demo')
} catch (e) {}
