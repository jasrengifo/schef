/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)

import './styles/app.scss';
import '@popperjs/core/lib/popper.js'
import('jquery-ui/ui/widgets/tooltip.js');
import $ from 'jquery';
// start the Stimulus application
import './bootstrap';
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle'


import '@fortawesome/fontawesome-free/js/all.js';



$(document).ready(
    function(){

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    }

);

