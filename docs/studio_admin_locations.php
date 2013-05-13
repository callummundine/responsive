  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
              <p class="main-heading">Locations</p>          
          <div>
            <div style="padding: 5px; border-bottom:1px solid #ddd;">
              
              <button href="#myModal" role="button" type="button" class="btn btn-primary" data-toggle="modal"><i class="icon-plus"></i> Add New Location</button>
            </div>
              <ul id="locations-ul">
                <li>
                    <p id="location-name">Geelong Yoga Center<button type="button" class="btn pull-right">Edit</button></p>
                    <p>125 High St, Geelong, 3215</p>
                    <p>Phone: 52289281</p>
                </li>
                <li>
                    <p id="location-name">Geelong Yoga Center<button type="button" class="btn pull-right">Edit</button></p>
                    <p>125 High St, Geelong, 3215</p>
                    <p>Phone: 52289281</p>
                </li>

            </ul>
          </div>
        </div>
      
      </div>

    </div>

  </div>


 
<!-- Location Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Location</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
      <div class="control-group">
        <div class="controls no-margin">
          <input class="input-xlarge" type="text" id="#" placeholder="Location Name"><span class="help-inline" style="font-size:0.8em;">*Required</span>
        </div>
      </div>
      <div class="control-group">
        <div class="controls no-margin">
          <input class="span5" type="text" id="#" placeholder="Address Prefix e.g Upper Floor">
        </div>
      </div>
      <div class="control-group">
        <div class="controls no-margin">
          <input class="input-xlarge" type="text" id="#" placeholder="Address"><span class="help-inline" style="font-size:0.8em;">*Required</span> <!-- use Google Maps auto suggest -->
        </div>
      </div>
      <div class="control-group">
        <div class="controls no-margin">
          <input class="input-xlarge" type="text" id="#" placeholder="Phone">
        </div>
      </div>
      <div id="google-map-location">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/?ie=UTF8&amp;ll=-36.605471,145.469483&amp;spn=5.237815,11.436768&amp;t=m&amp;z=7&amp;output=embed"></iframe>
      </div>

    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>

    <?php include('footer.php'); ?>

  </body>
</html>

