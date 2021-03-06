// God save the Dev
'use strict';

if (process.env.NODE_ENV !== 'production') {
  require('./assets/templates/layouts/index.html');
}

// Depends
var $ = require('jquery');
require('bootstrap-sass');

// Modules
var Forms = require('_modules/forms');
var Slider = require('_modules/slider');
var Popup = require('_modules/popup');
var Fancy_select = require('_modules/fancyselect');
var Jscrollpane = require('_modules/jscrollpane');
var LightGallery = require('_modules/lightgallery');
var Jslider = require('_modules/jslider');
var Fancybox = require('_modules/fancybox');
var Chosen = require('_modules/chosen');

// Stylesheet entrypoint
require('_stylesheets/app.scss');

// Are you ready?
$(function() {
  new Forms();
  new Popup();
  new Fancy_select();
  new Jscrollpane();
  new LightGallery();
  new Slider();
  new Jslider();
  new Fancybox();
  new Chosen();
});

$(function() {
  $('.catalog-item').click(function() {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active').children('.catalog-submnu').slideUp();
    } else {
      $('.catalog-item.active').removeClass('active').children('.catalog-submnu').slideUp();
      $(this).addClass('active').children('.catalog-submnu').slideDown();
    }
  });
});
