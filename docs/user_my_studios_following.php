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
                <p id="studio-name">Geelong Yoga Center</p>
                <p class="mb-1em">125, High St, Geelong, 3215</p>
                <button type="button" class="btn"><i class="icon-calendar icon-15x"></i> View Timetable</button>  
                <button type="button" class="btn"><i class="icon-heart red icon-15x"></i> Unfollow</button>  
            </li>
            <li>
                <p id="studio-name">Geelong Yoga Center</p>
                <p class="mb-1em">125, High St, Geelong, 3215</p>
                <button type="button" class="btn"><i class="icon-calendar icon-15x"></i> View Timetable</button>  
                <button type="button" class="btn"><i class="icon-heart red icon-15x"></i> Unfollow</button>  
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
