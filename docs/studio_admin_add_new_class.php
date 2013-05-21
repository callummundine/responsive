  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
          <p class="main-heading">Add New Weekly Repeating Class</p>          
          <div class="p-1em">
              <form class="form-horizontal">

              <p class="mb-05em">Category</p>
              <select>
                <option>Yoga and Pilates</option>
              </select>
              <br><br>

              <p class="mb-05em">Sub-Category</p>
              <select>
                <option>Yoga</option>
                <option>Pilates</option>
                <option>Bikram Yoga</option>
                <option>Hatha Yoga</option>
                <option>Outdoor Yoga</option>
              </select>
              <br><br>

              <p class="mb-05em">Difficulty</p>
              <select>
                <option>Beginners</option>
                <option>Intermediate</option>
                <option>Advanced</option>
              </select>
              <br>
              <hr>
              <p class="mb-05em">Class Title</p>
              <div class="control-group">
                <div class="controls no-margin">
                  <input class="input-xlarge" type="text" id="#" placeholder="Whats the name of your class?">
                </div>
              </div>

              <p class="mb-05em">Description</p>          
              <textarea rows="7" class="input-xxlarge mb-1em" placeholder="Write about your Class..."></textarea>
              <hr>
              <p>Do you want to accept online bookings for this class?</p>
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Yes
              </label>
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                No
              </label>
              <br>
              <span class="help-inline mr-05em f-08em">What is the maximum amount of bookings you want to accept through Klassable?</span><input type="number" placeholder="" class="span2">
              <br><br>
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Use my default pricing
              </label>
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Use custom pricing
              </label>
              <br>

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
                
                <div class="schedule-cycle">
                  <p id="schedule-cycle-title">Weekly Cycle 1<button type="button" class="btn pull-right"><i class="icon-remove"></i></button></p>
                  <div id="repeating-weekly"> <!-- Should be shown when 'Repeating Weekly' radio button is selected -->
                    <p>Repeating Days</p>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1"> Mon
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox2" value="option2"> Tue
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Wed
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Thu
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Fri
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Sat
                    </label>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Sun
                    </label>
                    <br><br>

                    <span class="help-inline mr-05em f-08em">Start Time</span><input type="time" placeholder="" class="span3">
                    <span class="help-inline mr-05em f-08em">End Time</span><input type="time" placeholder="" class="span3">
                    <br><br>
                    <span class="help-inline mr-05em f-08em">Start Date</span><input type="date" placeholder="" class="span3">
                    <span class="help-inline mr-05em f-08em">Number Of Weeks</span><input type="number" placeholder="" class="span2"><span class="help-inline f-08em">Ends 25/12/2013</span>
                    <label class="checkbox inline">
                      <input type="checkbox" id="inlineCheckbox3" value="option3"> Ongoing Cycle
                    </label>
                  </div>
                  <br>

                  <div id="teacher-location"> <!-- Always Visable -->
                    <div id="teacher-location-left">
                      <p class="mb-05em">Teacher</p>
                      <select>
                        <option>Callum Mundine</option>
                        <option>John Doe</option>
                      </select>
                    </div>
                    <div id="teacher-location-right">
                      <p class="mb-05em">Location</p>
                      <select>
                        <option>Yoga Studio 1</option>
                        <option>Yoga Studio 2</option>
                      </select>
                    </div>
                  </div>

                </div>
                <br>
                <!-- End of schedule cycle -->
                <br>

                <button type="submit" class="btn pull-right"><i class="icon-plus"></i> Add Another Schedule Cycle</button>
                <br><br>
                
                <button type="submit" class="btn btn-success">Publish</button>
                <button type="submit" class="btn btn-warning">Save As Draft</button>
                <button type="button" class="btn btn-danger">Cancel</button>

            </form>
          </div>
        </div>
      
      </div>

    </div>

  </div>


    <?php include('footer.php'); ?>

  </body>
</html>

