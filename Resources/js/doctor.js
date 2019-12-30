$(function () {
    $(document).scroll(function () {
      $('.rvp-navbar').toggleClass("rvp-nav-alt", ($(this).scrollTop() > 50));
    });
  });

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) 
  {
    $("#showThis").fadeIn(2000);
    $("#hideThis").fadeOut(300);
  } 
  else
  {
    $("#hideThis").fadeIn(0);
    $("#showThis").fadeOut(0);
  }
}