  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
              <p class="main-heading">Holidays</p>          
          <div class="p-1em">
              <form class="form-horizontal">
              <div class="control-group">
                <div class="controls no-margin">
                  <label>Holiday Date</label>
                  <input class="input-large" type="date" id="#">
                </div>
              </div>
              <div class="control-group">
                <div class="controls no-margin">
                  <label>Holiday Name</label>
                  <input class="input-large" type="text" id="#">
                </div>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Class Name</th>
                    <th>Time</th>
                    <th>Run Class?</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Bikram Yoga</td>
                    <td>7:30PM</td>
                    <td>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        Yes
                      </label>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                        No
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>Bikram Yoga</td>
                    <td>7:30PM</td>
                    <td>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        Yes
                      </label>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                        No
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>Bikram Yoga</td>
                    <td>7:30PM</td>
                    <td>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        Yes
                      </label>
                      <label class="radio inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                        No
                      </label>
                    </td>
                  </tr>

                </tbody>
              </table>
              <br>
              <div class="control-group">
                <div class="controls no-margin">
                  <button type="submit" class="btn" id="save-holiday-btn" href="#myModal" role="button" data-toggle="modal">Save Holiday</button></a><span class="help-inline f-08em">This cannot be undone</span>
                </div>
              </div>
            </form>


          </div>
            <p class="page-heading" style="border-top: 1px solid #ddd;">Saved Holidays</p>
            <ul id="holidays-ul">
              <li>
                <p>Easter Friday</p>
                <ol id="holiday-saved-ul">
                  <li>Bikram Yoga - 7:30AM - Running</li>
                  <li class="canceled-class">Bikram Yoga - 7:30AM - Canceled</li>
                </ol>
              </li>
              <li>
                <p>Easter Saturday</p>
                <ol id="holiday-saved-ul">
                  <li>Bikram Yoga - 7:30AM - Running</li>
                  <li class="canceled-class">Bikram Yoga - 7:30AM - Canceled</li>
                </ol>
              </li>
              <li>
                <p>Easter Sunday</p>
                <ol id="holiday-saved-ul">
                  <li>Bikram Yoga - 7:30AM - Running</li>
                  <li class="canceled-class">Bikram Yoga - 7:30AM - Canceled</li>
                </ol>
              </li>
            </ul>
        </div>
      </div>

    </div>

  </div>

    <?php include('footer.php'); ?>
 
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Save Holiday</h3>
      </div>
      <div class="modal-body">
        <form>
            <p>Please type 'HOLIDAY' to confirm. A holiday cannot be undone.</p>
            <br>
            <input type="text" placeholder="">
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Confirm</button>
      </div>
    </div>

  </body>
</html>

