$(document).ready(function(){
  setTimeout(function(){
    $('#rvp-login').addClass('rvp-hide');
    $('#rvp-sender').addClass('rvp-sent');  
  }, 5000);
});

$(function () {
  $(document).scroll(function () {
    $('.rvp-navbar').toggleClass("rvp-nav-alt", ($(this).scrollTop() > 50));
    $('.rvp-row').toggleClass("rvp-disappear", ($(this).scrollTop() > 250));
    $('.rvp-body').toggleClass("rvp-appear", ($(this).scrollTop() > 100));
    $('.rvp-doctor-head').toggleClass("rvp-appear", ($(this).scrollTop() > $(".rvp-hero").height()-200));
    $('#rvp-doc').toggleClass("rvp-appear", ($(this).scrollTop() > $(".rvp-hero").height()));
    $('#rvp-doc2').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height()/1.3)));
    $('#rvp-doc3').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height()*1.1)));
    $('.rvp-location-head').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height() + $(".rvp-hero").height() -200)));
    $('#rvp-locate').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height() + $(".rvp-hero").height())));
    $('#rvp-locate2').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height() + $(".rvp-hero").height() + 400)));
    $('.rvp-contact').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height() + $(".rvp-hero").height() + $(".rvp-foot-bg").height() - 100)));
    $('#rvp-tag').toggleClass("rvp-appear", ($(this).scrollTop() > ($(".rvp-doctor").height() + $(".rvp-hero").height() + $(".rvp-foot-bg").height() - 100)));
  });
});

$("#patient-button").click(function(){
  $("#Patient-login").removeClass("d-none");
  $("#patient-button").addClass("d-none");
  $("#Doctor-login").addClass("d-none");
  $("#doctor-button").removeClass("d-none");
  $("#rvp-doc-log").removeClass("rvp-col");
  $("#rvp-pat-log").addClass("rvp-col-left");
});

$("#doctor-button").click(function(){
  $("#Doctor-login").removeClass("d-none");
  $("#doctor-button").addClass("d-none");
  $("#Patient-login").addClass("d-none");
  $("#patient-button").removeClass("d-none");
  $("#rvp-doc-log").addClass("rvp-col");
  $("#rvp-pat-log").removeClass("rvp-col-left");
});

$("#go-pat-back").click(function(){
  $("#Patient-login").addClass("d-none");
  $("#patient-button").removeClass("d-none");
  $("#rvp-doc-log").addClass("rvp-col");
});

$("#go-doc-back").click(function(){
  $("#Doctor-login").addClass("d-none");
  $("#doctor-button").removeClass("d-none");
  $("#rvp-pat-log").addClass("rvp-col-left");
});
