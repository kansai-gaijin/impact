import $ from 'jquery'
import 'is-in-viewport'

$.fn.isInView = function () {
  var o = jQuery(this).get(0); // It's your element

  var bounding = o.getBoundingClientRect();
  return (
    bounding.top >= 0 &&
    bounding.left >= 0 &&
    bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}


function handleNavScroll() {

  var win = $(window);
  var body = $('body');
  var st = win.scrollTop();

  if (st > 5) {
    body.addClass('scrolled');
  } else {
    body.removeClass('scrolled');
  }

}

function handleNavToggles() {
  var body = $('body');
  body.on('click', '.js-nav-toggle', function (event) {
    body.toggleClass('nav-open');
    event.preventDefault();
  });
}

function handleToTops() {
  var body = $('body');
  body.on('click', '.js-scroll-top', function (event) {
    $('html,body').animate({ scrollTop: 0 }, 'fast');
    event.preventDefault();
  });
}

function inputClick(){
  var that = $(this);
  var parent = that.parent().parent().parent();

  $('.input-item').each(function(i){
    $(this).removeClass('active');
  });

  parent.addClass('active');
}

function handleText(){
  var that = $(this);
  var val = that.val();

  var parent = that.parent().parent().parent();

  if(val.length > 0){
    parent.addClass('has-text');
  }else{
    parent.removeClass('has-text');
  }
}

function handleInputs(){
  $('.input-item input').click(inputClick);
  $('.input-item textarea').click(inputClick);

  $('.input-item input').change(handleText);
  $('.input-item textarea').change(handleText);

  $('.input-item input').each(function(){
    var parent = $(this).parent().parent().parent();
    var val = $(this).val();
    if(val.length > 0){
      parent.addClass('has-text');
    }else{
      parent.removeClass('has-text');
    }
  });

  $('.input-item textarea').each(function(){
    var parent = $(this).parent().parent().parent();
    var val = $(this).val();
    if(val.length > 0){
      parent.addClass('has-text');
    }else{
      parent.removeClass('has-text');
    }
  });

}



function handlePageLoad() {
  var body = $('body');
  $(window).load(function () {
    setTimeout(function () {
      body.addClass('loaded');
      setTimeout(function () {
        handleScrollAnims();
      }, 500);
    }, 600);

  });
}

function handleScrollAnims() {
  //var objects = $(".anim");
  $(window).scroll(function () {
    // objects.each(function (index) {
    //   let obj = $(this);
    //   if (obj.isInView()) {
    //     obj.addClass('start');
    //   }
    // });
    $('.anim:in-viewport').addClass('start');
  });
  /*objects.each(function (index) {
    let obj = $(this);
    if (obj.isInView()) {
      obj.addClass('start');
    }
  });*/
  $('.anim:in-viewport').addClass('start');
}

function handleDrawerLinks() {

  var body = $('body');
  body.on('click', '#mobile-drawer li.menu-item-has-children a', function (event) {
    var that = $(this);
    var parent = that.parent('li');

    if(! parent.hasClass('active') && parent.hasClass('menu-item-has-children')){
      event.preventDefault();
      parent.addClass('active');
      return false;
    }

    return true;
    
  });

}

function Init() {
  var win = $(window);

  handlePageLoad();

  handleNavScroll();
  handleNavToggles();
  handleDrawerLinks();
  win.scroll(handleNavScroll);
  handleToTops();
  handleInputs();

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

}

$(document).ready(function () {

  Init();

});