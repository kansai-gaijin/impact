import $ from 'jquery'


function handleNavScroll(){

  var win = $(window);
  var body = $('body');
  var st = win.scrollTop();

  if(st > 5){
    body.addClass('scrolled');
  }else{
    body.removeClass('scrolled');
  }

}

function handleNavToggles(){
  var body = $('body');
  body.on('click', '.js-nav-toggle', function(event){
    body.toggleClass('nav-open');
    event.preventDefault();
  });
}

function Init(){
  var win = $(window);

  handleNavScroll();
  handleNavToggles();
  win.scroll(handleNavScroll);
}

$(document).ready(function(){

  Init();

});