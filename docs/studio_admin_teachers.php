  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
              <p class="main-heading">Teachers</p>          
          <div>
            <div class="add-new-div">
              <button href="#myModal" role="button" type="button" class="btn btn-primary" data-toggle="modal"><i class="icon-plus"></i> Add New Teacher</button>
            </div>
              <ul>
                <li class="teacher-profile">
                    <p id="teacher-name">Callum Mundine
                      <button type="button" class="btn pull-right" style="margin-left:10px;">Edit</button>
                      <button type="button" class="btn pull-right btn-danger" href="#teacherDelete" role="button" data-toggle="modal">Delete</button>
                    </p>
                    <div id="teacher-photo">

                    </div>
                    <div id="teacher-content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <p id="teacher-classes">Classes Taken</p>
                    <ul>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                    </ul>
                </li>

                <li class="teacher-profile">
                    <p id="teacher-name">Callum Mundine<button type="button" class="btn pull-right" style="margin-left:10px;">Edit</button><button type="button" class="btn pull-right btn-danger">Delete</button></p>
                    <div id="teacher-photo">

                    </div>
                    <div id="teacher-content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <p id="teacher-classes">Classes Taken</p>
                    <ul>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                    </ul>
                </li>

                <li class="teacher-profile">
                    <p id="teacher-name">Callum Mundine<button type="button" class="btn pull-right" style="margin-left:10px;">Edit</button><button type="button" class="btn pull-right btn-danger">Delete</button></p>
                    <div id="teacher-photo">

                    </div>
                    <div id="teacher-content">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <p id="teacher-classes">Classes Taken</p>
                    <ul>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                      <li class="taken-li"><a href="#">Yoga</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      
      </div>

    </div>

  </div>

<!-- Teacher Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Teacher</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
      <div class="control-group">
        <div class="controls no-margin">
          <input class="input-xlarge" type="text" id="#" placeholder="Name"><span class="help-inline" style="font-size:0.8em;">*Required</span>
        </div>
      </div>

      <div id="teacher-photo"></div>

      <input type="file" name="file" size="40">

      <textarea rows="6" placeholder="Biography" class="span6"></textarea>

    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<!-- End of modal -->

<!-- Teacher Modal -->
<div id="teacherDelete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Teacher</h3>
  </div>
  <div class="modal-body">
    <p>Are you sure you want to delete this teacher?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Confirm</button>
  </div>
</div>
<!-- End of modal -->

    <?php include('footer.php'); ?>

  </body>
</html>

