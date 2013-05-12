  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('studio_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
        <div class="wrapper">
          <?php include('studio-header.php') ?>
          <?php include('cover-photo.php'); ?>
          <p class="page-heading">Reviews</p>
          <div class="pad-10 align-center">
            <p class="align-center font-1em mb-1em">Write Your Own Review</p>
              <form>
            <fieldset>
              <p class="mb-1em">What class do you want to review?</p>
              <select class="mb-1em">
                <option>Bikram Yoga</option>
              </select>
              <p>How do you rate your instructor?</p>
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <br><br>
              <p>How do you rate your class?</p>
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <br><br>
              <p>How do you rate this venues facilities/equipment?</p>
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <br><br>
              <p class="bold">Overall Rating</p>
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              <br><br>
              <p class="mb-1em">Please write about your experience.</p>
              <textarea rows="3" class="input-xlarge"></textarea>
              <p class="mb-1em">Do you want the public to see your name?</p>
              <select>
                <option>Yes</option>
                <option>No</option>
              </select>
              <br><br>
              <button type="button" class="btn mb-1em">Submit Review</button>
            </fieldset>
          </form>
          </div>
        </div>
      </div>

 

    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
