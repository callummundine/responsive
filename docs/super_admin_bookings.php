  <?php include('super_admin_header.php'); ?>
  <div class="container-full">

    <div class="row-fluid">

      <?php include('super_admin_sidebar.php'); ?>

      <div class="span10">

        <div class="wrapper">
          <div class="super-search-div">
            <form class="form-inline">
              <select class="span1">
                <option>Asc</option>
                <option>Dec</option>
              </select>
              <select class="span2">
                <option>Date</option>
                <option>Booking Number</option>
                <option>First Name</option>
                <option>Surname</option>
                <option>Studio</option>
                <option>Class</option>
                <option>Amount</option>
              </select>
              <input type="text" class="input-small" placeholder="Search">
              <button type="submit" class="btn">Search</button>
              <select class="span2 pull-right">
                <option>Please select...</option>
                <option>Checked In</option>
                <option>Not Checked In</option>
              </select>
              <span class="f-08em pull-right mr-1em">Filter By:</span>
            </form>
          </div>
          <p class="main-heading">Bookings</p>          
          <table class="table super-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Booking #</th>
                  <th>First Name</th>
                  <th>Surname</th>
                  <th>Studio</th>
                  <th>Class</th>
                  <th>Amount</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>25/5/2013</td>
                  <td>14235</td>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td>Geelong Yoga Center</td>
                  <td>Bikram Yoga</td>
                  <td>$15</td>
                  <td><button class="btn btn-mini btn-success disabled">Checked In</button></td>
                  <td><button class="btn btn-mini disabled">Read</button></td>
                </tr>
                <tr>
                  <td>25/5/2013</td>
                  <td>14235</td>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td>Geelong Yoga Center</td>
                  <td>Bikram Yoga</td>
                  <td>$15</td>
                  <td></td>
                  <td><button class="btn btn-mini btn-primary">Mark As Read</button></td>
                  
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

    <?php include('super_admin_footer.php'); ?>

  </body>
</html>

