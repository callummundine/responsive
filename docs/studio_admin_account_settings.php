  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
              <p class="main-heading">Account Settings</p>          
          <div class="p-1em">
            <form class="form-horizontal">
              <p class="acccount-s-head">Account Manager Details</p>  
              <input type="text" class="mb-1em" id="" placeholder="First Name">
              <input type="text" class="mb-1em" id="" placeholder="Surname">
              <input type="number" class="mb-1em" id="" placeholder="Phone Number">
              <input type="email" class="mb-1em" id="" placeholder="Email">
              <input type="password" class="mb-1em" id="" placeholder="New Password">
              <input type="password" class="mb-1em" id="" placeholder="Confirm New Password">
              <hr>
              <p class="acccount-s-head">Studio Details</p>  
              <input type="text" class="mb-1em" id="" placeholder="Studio Name">
              <input type="number" class="mb-1em" id="" placeholder="Phone Nunber">
              <input type="email" class="mb-1em" id="" placeholder="Email">
              <br>
              <textarea rows="6" class="span12" placeholder="Write about your studio a.k.a 'About Us'"></textarea>
              <hr>
              <p class="acccount-s-head">Address</p>  
              <input type="text" class="mb-1em" id="" placeholder="Address Prefix e.g 'Upper Floor'">
              <br>
              <input type="text" class="mb-1em span12" id="" placeholder="Address">
              <br>
              <textarea rows="6" class="span12" placeholder="Write about your studio a.k.a 'About Us'"></textarea>
              <hr>
              <p class="acccount-s-head">Photos</p>  
              <p>Cover Photo</p>
              <div id="cover-photo-admin"></div>
              <br>
              <button type="button" class="btn mr-1em btn-danger">Delete</button><input type="file" name="file" size="40">
              <br><br>
              <p>Profile Photo</p>
              <div id="profile-photo-admin"></div>
              <br>
              <button type="button" class="btn mr-1em btn-danger">Delete</button><input type="file" name="file" size="40">
              <hr>
              <p class="acccount-s-head">Social Links</p> 
              <p class="mb-05em">Website</p>
              <input type="text" class="input-xlarge mb-1em" placeholder="e.g www.mywebsite.com">
              <p class="mb-05em">Facebook</p>
              <input type="text" class="input-xlarge mb-1em" placeholder="e.g www.facebook.com/mybusiness">
              <p class="mb-05em">Twitter</p>
              <input type="text" class="input-xlarge mb-1em" placeholder="e.g www.twitter.com/mybusiness">
              <p class="mb-05em">Google Plus</p>
              <input type="text" class="input-xlarge mb-1em" placeholder="e.g https://plus.google.com/104676953517348499221/about">
              <p class="mb-05em">Foursquare ID</p>
              <input type="text" class="input-xlarge mb-1em" placeholder="Foursquare ID">
              <br>
              <hr>
              <p class="acccount-s-head">Default Pricing<input type="checkbox" class="ml-1em"><span class="f-08em"> Do not use default pricing.</span></p> 
              <p class="mb-1em">* When scheduling a class you can select to user default or custom pricing.</p>
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Ticket Type</th>
                      <th>Ticket Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <select>
                          <option>Standard</option>
                          <option>Student</option>
                          <option>Senior</option>
                          <option>Child</option>
                        </select>
                      </td>
                      <td>
                        <div class="input-prepend input-append">
                          <span class="add-on">$</span>
                          <input class="span4" id="appendedPrependedInput" type="text">
                        </div>
                        <button type="button" class="btn pull-right ml-1em">Add Another Type</button>
                        <button type="button" class="btn pull-right"><i class="icon-remove"></i> </button>                    
                      </td>
                    </tr>
                  </tbody>
                </table>
                <hr>
              <p class="acccount-s-head">Trading Hours<input type="checkbox" class="ml-1em"><span class="f-08em"> Do not display trading hours.</span></p> 
              <span class="help-inline f-08em mr-1em w-100px align-right">Monday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Tuesday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Wednesday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Thursday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Friday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Saturday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span><br><br>
              <span class="help-inline f-08em mr-1em w-100px align-right">Sunday</span><input type="time" class="span2"><span class="help-inline f-08em mr-1em">To</span><input type="time" class="span2"><input type="checkbox" class="ml-1em"><span class="f-08em"> Closed</span>
              <br>
              <hr>
              <p class="acccount-s-head">Bank Details</p>
              <input type="text" class="span4 mb-1em" placeholder="Account Name"><br>
              <input type="text" class="span4 mb-1em" placeholder="Account Number"><br>
              <input type="text" class="span4" placeholder="BSB Number"><br>
              <hr>
              <button type="button" class="btn btn-primary">Save</button><button type="button" class="btn ml-1em">Cancel</button>
            </form>
          </div>
        </div>
      
      </div>

    </div>

  </div>


    <?php include('footer.php'); ?>

  </body>
</html>

