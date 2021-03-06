  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('user_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

     <div class="span9">
      <div class="wrapper">
        <p class="main-heading">Studios Following</p>
        <div>
          <ul id="studios-following-ul">
            <li>
                <table class="w-100">
                  <th class="w-17">
                    <div id="studio-photo"></div>
                  </th>
                  <th>
                    <p id="studio-name" class="normal">Geelong Yoga Center</p>
                    <p class="mb-1em">125, High St, Geelong, 3215</p>
                    <a href="studio_timetable.php"><button type="button" class="btn"><i class="icon-calendar icon-1x"></i> View Timetable</button></a>
                    <button type="button" class="btn"><i class="icon-heart red icon-1x"></i> Unfollow</button>  
                  </th>
                </table>
            </li>
            <li>
                <table class="w-100">
                  <th class="w-17">
                    <div id="studio-photo"></div>
                  </th>
                  <th>
                    <p id="studio-name" class="normal">Geelong Yoga Center</p>
                    <p class="mb-1em">125, High St, Geelong, 3215</p>
                    <a href="studio_timetable.php"><button type="button" class="btn"><i class="icon-calendar icon-1x"></i> View Timetable</button></a>
                    <button type="button" class="btn"><i class="icon-heart red icon-1x"></i> Unfollow</button>  
                  </th>
                </table>
            </li>
          </ul>
        </div>
      </div>
    </div>


<script type="text/javascript">
  $(document).ready(function () {
    $('.view-timetable').tooltip();
  });
</script>

    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
