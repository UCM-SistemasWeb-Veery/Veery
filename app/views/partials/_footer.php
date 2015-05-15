              <?php 
                  include_once('_right-sidebar.php');
              ?>
          </div>
        </div>
        <!-- /#app-content -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo js_path?>app.js"></script>

    <!-- Menu Toggle Script -->
    <script>
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
    </script>

</body>

</html>
