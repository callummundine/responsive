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
                <option>Please Select...</option>
                <option>Date</option>
              </select>
              <input type="text" class="input-large ml-5em" placeholder="Search">
              <button type="submit" class="btn">Search</button>
              <select class="span2 pull-right">
                <option>Please select...</option>
                <option>Approved</option>
                <option>Not Approved</option>
              </select>
              <span class="f-08em pull-right mr-1em">Filter By:</span>
            </form>
          </div>
          <p class="main-heading">Reviews</p>          
          <table class="table super-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>First Name</th>
                  <th>Surname</th>
                  <th>Display</th>
                  <th>Rating</th>
                  <th>Class</th>
                  <th>Studio</th>
                  <th class="w-40">Content</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>25/5/2013</td>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td>Public</td>
                  <td>4</td>                  
                  <td>Bikram Yoga</td>
                  <td>Geelong Yoga Center</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                  <td><button class="btn btn-success btn-mini disabled mb-1em">Approved</button><br>
                  <button class="btn btn-mini mb-1em" href="#editReview" role="button" data-toggle="modal">Edit</button><br>  
                  <button class="btn btn-mini btn-danger" href="#deleteReview" role="button" data-toggle="modal">Delete</button></td>
                </tr>
                <tr>
                  <td>25/5/2013</td>
                  <td>Callum</td>
                  <td>Mundine</td>
                  <td>Public</td>
                  <td>4</td>                  
                  <td>Bikram Yoga</td>
                  <td>Geelong Yoga Center</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                  <td><button class="btn btn-mini mb-1em">Approve</button><br>
                  <button class="btn btn-mini mb-1em" href="#editReview" role="button" data-toggle="modal">Edit</button><br>  
                  <button class="btn btn-mini btn-danger" href="#deleteReview" role="button" data-toggle="modal">Delete</button></td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
 
<!-- Edit Modal -->
<div id="editReview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-body">
    <textarea rows="5" class="span6"></textarea>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
    <button class="btn btn-primary">Save</button>
  </div>
</div>

<!-- Modal Delete-->
<div id="deleteReview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-body">
    <p>Are you sure you want to delete this review</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
    <button class="btn btn-primary">Yes</button>
  </div>
</div>

    <?php include('super_admin_footer.php'); ?>

  </body>
</html>