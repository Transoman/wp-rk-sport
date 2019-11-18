'use strict';

global.jQuery = require('jquery');
global.$ = require('jquery');
const svg4everybody = require('svg4everybody'),
    popup = require('jquery-popup-overlay'),
    iMask = require('imask'),
    fancybox = require('@fancyapps/fancybox');

import scrollingHeader from "./libs/scrollingHeader";
import burgerMenu from "./libs/burgerMenu";
import addSliders from "./libs/sliders";
import modelsSlider from "./libs/modelsSlider";


$(document).ready(function ($) {

    // Modal
    let initModal = function () {
        $('.modal').popup({
            transition: 'all 0.3s',
            scrolllock: true,
            onclose: function () {
                $(this).find('label.error').remove();
                $(this).find('.wpcf7-response-output').hide();
            }
        });
    };

    // Input mask
    let inputMask = function () {
        let phoneInputs = $('input[type="tel"]');
        let maskOptions = {
            mask: '+{7} (000) 000-0000'
        };

        if (phoneInputs) {
            phoneInputs.each(function (i, el) {
                IMask(el, maskOptions);
            });
        }
    };



    initModal();
    inputMask();

    addSliders();
    burgerMenu();
    modelsSlider();

    // SVG
    svg4everybody({});
});

jQuery(document).scroll(scrollingHeader);