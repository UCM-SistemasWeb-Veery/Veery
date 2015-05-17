

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
          if ( $("#menu-toggle").hasClass('open')) {

             $("#menu-toggle").addClass('close');
             $("#menu-toggle").one('transitionend', function() {
               $("#menu-toggle").removeClass('open close');
            });

          } else {
             $("#menu-toggle").addClass('open');
          }
    });

    $("#login-button").click(function(e){
      e.preventDefault();
      $("#login-form").css('display', 'block');
      $("#login-button").css('display', 'none');
    });
