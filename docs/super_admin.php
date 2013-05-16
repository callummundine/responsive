  <?php include('super_admin_header.php'); ?>
  <div class="container-full">

    <div class="row-fluid">

      <?php include('super_admin_sidebar.php'); ?>

      <div class="span10">


          <div class="row align-center" style="margin-left:0px;">
            <div class="span4 wrapper">
                <p class="page-heading">News</p>              
              <div class="super-span">
                <button class="btn btn-success disabled">5 New Bookings</button><BR><br>
                <button class="btn btn-success disabled">10 New Users</button><br><br>
                <button class="btn btn-success disabled">1 New Review</button><br><br>
              </div>
            </div>
            <div class="span4 wrapper">
                <p class="page-heading">Financials</p>              
              <div class="super-span">
                <p class="mb-1em">Bookings Today: $300</p>
                <p class="mb-1em">Commission Fees: $30</p>
                <hr>
                <p class="mb-1em">Total Amount Owing</p>
                <button class="btn btn-danger disabled">$500</button><br><br>
                <p class="mb-1em">Total Commision Collected</p>
                <button class="btn btn-success disabled">$30</button><br><br>
              </div>
            </div>
          </div>         

        </div>
      </div>
    </div>
  </div>

    <?php include('super_admin_footer.php'); ?>

  </body>
</html>

