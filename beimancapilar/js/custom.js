jQuery(document).ready(function( $ ){

  $("#scroll").on('click', function(event) {
      if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });

  $(".microinjerto-5 i").on('click', function(event) {
    event.preventDefault();
    $(this).parent().parent().find(".info").slideToggle(300);
    $(this).parent().parent().find(".info").toggleClass("hide show", 500);
    $(this).toggleClass("fa-plus fa-plus-circle", 300);
  });
});