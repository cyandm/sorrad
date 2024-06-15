jQuery(document).ready(function($){

    $("#open-popup").click(function(){
      $("#popup-wrapper").slideDown();
      $("#popup-overlay").fadeIn();
    });
  
    $("#close-popup").click(function(){
      $("#popup-wrapper").slideUp();
      $("#popup-overlay").fadeOut();
    });

    $("#popup-overlay").click(function(){
      $("#popup-wrapper").slideUp();
      $("#popup-overlay").fadeOut();
    });
  
  });
  