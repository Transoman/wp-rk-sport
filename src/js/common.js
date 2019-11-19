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

  // Load more
  $('body').on('click', '.load-more', function(e) {
    e.preventDefault();
    let btnText = $(this).text();
    $(this).text('Загружаю...');

    var data = {
      'action': 'load_more_post',
      'query': true_posts,
      'page' : current_page
    };
    $.ajax({
      url: window.wp_data.ajax_url, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#response').addClass('active');
      },
      success:function(data){
        if ( data ) {
          $('.load-more').text(btnText).before(data); // вставляем новые посты
          $('#response').removeClass('active');

          $('.models-slider__slider.slick-initialized').each(function(i, el) {
            $(el).slick('unslick');
            $(el).removeAttr('id');
            $(el).removeClass('slick-vertical');
          });
          $('.models-slider__nav.slick-initialized').each(function(i, el) {
            $(el).slick('unslick');
            $(el).removeAttr('id');
            $(el).removeClass('slick-vertical');
          });

          modelsSlider();
          current_page++; // увеличиваем номер страницы на единицу
          if (current_page == max_pages) $('.load-more').remove(); // если последняя страница, удаляем кнопку
        } else {
          $('.load-more').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });


  initModal();
  inputMask();

  addSliders();
  burgerMenu();
  modelsSlider();
  scrollingHeader();

  // SVG
  svg4everybody({});
});

jQuery(document).scroll(scrollingHeader);