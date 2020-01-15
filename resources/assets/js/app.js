import $ from 'jquery'


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

function Init() {
  var win = $(window);

  handleNavScroll();
  handleNavToggles();
  win.scroll(handleNavScroll);
  handleToTops();
}

$(document).ready(function () {

  Init();

});