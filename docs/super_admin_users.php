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
                <option>First Name</option>
                <option>Surname</option>
                <option>Joined On</option>
                <option>Reviews</option>
              </select>
              <input type="text" class="input-large ml-5em" placeholder="Search">
              <button type="submit" class="btn">Search</button>
              <select class="span2 pull-right">
                <option>Please select...</option>
                <option>Facebook Login</option>
                <option>Klassable Login</option>
              </select>
              <span class="f-08em pull-right mr-1em">Filter By:</span>
            </form>
          </div>
          <p class="main-heading">Users</p>          
          <table class="table super-table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Surname</th>
                  <th>Login</th>
                  <th>Joined On</th>
                  <th>Reviews</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td><button class="btn btn-mini btn-primary disabled">Facebook</button></td>
                  <td>25/5/2013</td>
                  <td>5</td>
                  <td><td><button class="btn btn-mini disabled">Read</button></td></td>
                </tr>
                <tr>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td><button class="btn btn-mini disabled">Klassable</button></td>
                  <td>25/5/2013</td>
                  <td>5</td>
                  <td><td><button class="btn btn-mini btn-primary">Mark As Read</button></td></td>
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

