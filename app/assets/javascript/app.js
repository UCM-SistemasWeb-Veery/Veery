

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

      function showResult(str) {
          $.ajax({
              url: "http://www.veery.es/search/"+str,
              type: "get",
              dataType: "html"
          }).done(function(data) {
              $("#livesearch").html(data);
          });
      }
    $('.music-link').on('click', function(e) {
      e.preventDefault();
      $('footer').removeClass('hide');
      $("#jquery_jplayer_1").jPlayer("destroy");
      var mp3 = $(this).attr('data-source');
      //$('#jquery_jplayer_1').jPlayer('setMedia', {mp3:mp3}),jPlayer('play');
      $("#jquery_jplayer_1").jPlayer( {
        ready: function() { // The $.jPlayer.event.ready event
          $(this).jPlayer("setMedia", { // Set the media
            mp3: mp3
          }).jPlayer("play"); // Attempt to auto play the media
        },
        supplied: "mp3",
        keyEnabled: true,
        cssSelectorAncestor: "#jp_container_1",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
      });
    });