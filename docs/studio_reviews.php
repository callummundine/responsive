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
    <ul id="review-ul">
      <li>
        <p id="class-name">Bikram Yoga</p>
        <p class="mb-1em">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>

        <div class="inline-block w-100">
          <span class="span3 pull-left">
            <p>Class Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Instructor Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Facilities Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Overall Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>
        </div>
        <p>Reviewed By: Callum Mundine on 25th Jan 2013</p>
      </li>

            <li>
        <p id="class-name">Bikram Yoga</p>
        <p class="mb-1em">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>

        <div class="inline-block w-100">
          <span class="span3 pull-left">
            <p>Class Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Instructor Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Facilities Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>

          <span class="span3 pull-left">
            <p>Overall Rating</p>
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
            <input type="radio" class="inline" value="option1">
          </span>
        </div>
        <p>Reviewed By: Anonymous on 25th Jan 2013</p>
      </li>
    </ul>

    <p class="page-heading border-top">Write Your Own Review</p>
          <div class="pad-10 align-center">
              <form>
            <fieldset>
              <p class="mb-1em">What class do you want to review?</p>
              <select class="mb-1em">
                <option>Bikram Yoga</option>
              </select>
              <p>How do you rate your instructor?</p>
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <br><br>
              <p>How do you rate your class?</p>
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <br><br>
              <p>How do you rate this venues facilities/equipment?</p>
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <br><br>
              <p class="bold">Overall Rating</p>
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
              <input type="radio" class="inline" value="option1">
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
