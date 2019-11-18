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

  // Smooth scroll to anchor
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        let headerH = $('.header').height();

        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top - headerH
          }, 1000);
        }
      }
    });

  // Forms
  $('.wpcf7').on('wpcf7mailsent', function(){
    console.log('send');
    var modal = $('.modal');
    modal.popup("hide");
    $("#thanks").popup("show");
    setTimeout(function(){
      $(".modal").popup("hide");
      modal.find('.wpcf7-response-output').hide();
    }, 4000);
  });


  initModal();
  inputMask();

  addSliders();
  burgerMenu();
  modelsSlider();

  // SVG
  svg4everybody({});
});

jQuery(document).scroll(scrollingHeader);