              <?php 
                  include_once('_right-sidebar.php');
              ?>
          </div>
     
        </div>
        <!-- /#app-content -->
    </div>
    <!-- /#wrapper -->
    <footer>
      <div id="jquery_jplayer_1" class="jp-jplayer"></div>
      <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
        <div class="jp-type-single">
          <div class="jp-gui jp-interface">
            <div class="jp-volume-controls">
              <button class="jp-mute" role="button" tabindex="0">mute</button>
              <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
              <div class="jp-volume-bar">
                <div class="jp-volume-bar-value"></div>
              </div>
            </div>
            <div class="jp-controls-holder">
              <div class="jp-controls">
                <button class="jp-play" role="button" tabindex="0">play</button>
                <button class="jp-stop" role="button" tabindex="0">stop</button>
              </div>
              <div class="jp-progress">
                <div class="jp-seek-bar">
                  <div class="jp-play-bar"></div>
                </div>
              </div>
              <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
              <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
              <div class="jp-toggles">
                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
              </div>
            </div>
          </div>
          <div class="jp-details">
            <div class="jp-title" aria-label="title">&nbsp;</div>
          </div>
          <div class="jp-no-solution">
            <span>Update Required</span>
            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
          </div>
        </div>
      </div>      
    </footer>                
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo js_path?>app.js"></script>
    <script src="<?php echo js_path?>pinterest_grid.js"></script>
    <script src="<?php echo js_path?>jquery.jplayer.js"></script>
    <?php if(isset($data['js'])){ echo $data['js'];} ?>  
    <script type="text/javascript">
    /*$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "Bubble",
            m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4a, oga",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
      });
    });*/
            
  </script> 
  <script type="text/javascript">
    $('.music-link').on('click', function(e) {
      e.preventDefault();
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
      });        
    });
  </script>

</body>

</html>
