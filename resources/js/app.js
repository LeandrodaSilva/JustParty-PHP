require('./bootstrap');
window.Popper = require('popper.js');

import $ from 'jquery';
window.$ = window.jQuery = $;

require('bootstrap');

import 'jquery-ui/ui/widgets/datepicker.js';
$('#datepicker').datepicker();
