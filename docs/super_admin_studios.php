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
                <option>Name</option>
                <option>Address</option>
                <option>Phone</option>
                <option>Email</option>
                <option>Balance</option>
              </select>
              <input type="text" class="input-small" placeholder="Search">
              <button type="submit" class="btn">Search</button>
              <select class="span2 pull-right">
                <option>Please select...</option>
                <option>Paid</option>
                <option>Unpaid</option>
              </select>
              <span class="f-08em pull-right mr-1em">Filter By:</span>              
            </form>
          </div>
          <p class="main-heading">Studios</p>          
          <table class="table super-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Balance</th>
                  <th>Password</th>
                  <th>Mindbody</th>                  
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#" class="link-1">Geelong Yoga Center</a></td> <!-- When super admin clicks on studio name, they should be taken into the studio admin -->
                  <td>125 Moorabool St, Geelong, Victoria, 3215</td>
                  <td>callum@geelongyogacenter.com.au</td>
                  <td>$55.50</td>
                  <td>214hfus</td>                  
                  <td><button type="submit" class="btn btn-mini disabled btn-primary">Mindbody</button></td>
                  <td><button type="submit" class="btn" href="#confirmPaid" role="button" data-toggle="modal">Mark As Paid</button></td>
                  
                </tr>
                <tr>
                  <td><a href="#" class="link-1">Geelong Yoga Center</a></td> 
                  <td>125 Moorabool St, Geelong, Victoria, 3215</td>
                  <td>callum@geelongyogacenter.com.au</td>
                  <td>$55.50</td>
                  <td>214hfus</td>                  
                  <td></td>
                  <td><button type="submit" class="btn btn-success disabled">Paid</button></td>
                </tr>
              </tbody>
            </table>
        </div>
      
      </div>

    </div>

  </div>

<!-- Confirm Paid Modal -->
<div id="confirmPaid" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-body">
    <p>Are you sure you want to mark this as paid?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-primary">Confirm</button>
  </div>
</div>
<!-- End of modal -->

    <?php include('super_admin_footer.php'); ?>

  </body>
</html>

