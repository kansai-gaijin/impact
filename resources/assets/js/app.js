import $ from 'jquery'


jQuery.fn.isInView = function () {
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

function handlePageLoad() {
  var body = $('body');
  $(window).load(function () {
    body.addClass('loaded');
  });
}

function handleScrollAnims() {
  var objects = $(".anim");
  $(window).scroll(function(){
    objects.forEach(function(obj, index){
      obj.isInView.addClass('start');
    });
  });
  objects.forEach(function(obj, index){
    obj.isInView.addClass('start');
  });
}

function Init() {
  var win = $(window);

  handlePageLoad();

  handleNavScroll();
  handleNavToggles();
  win.scroll(handleNavScroll);
  handleToTops();

  handleScrollAnims();

}

$(document).ready(function () {

  Init();

});