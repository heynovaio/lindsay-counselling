// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

$(document).ready(function(){
  $('#nav-icon3').click(function(){
    $(this).toggleClass('open');
    $('.navbar').toggleClass('open');
  });

  $('.open .book-btn').click(function() {
    $(this).toggleClass('open');
    $('.navbar').toggleClass('open');
  });

  $('.book-btn').click(function() {
    var aTag = $('#book');
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
  });

});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
