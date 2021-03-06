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
    <div class="pad-10" id="class-page">
      <p id="class-page-name" class="font-15em mb-05em">Beginners Yoga</p>
      <p class="mb-05em">Select Start Date</p>
      <select id="class-select">
        <option>Thursday, 9 May, 5:30PM</option>
        <option>Thursday, 9 May, 5:30PM</option>
        <option>Thursday, 9 May, 5:30PM</option>
        <option>Thursday, 9 May, 5:30PM</option>
        <option>Thursday, 9 May, 5:30PM</option>
      </select>
      <br>
    <div class="btn-group" id="btn-bsb">
      <button class="btn btn-large btn-block k-button mb-05em">Book</button>      
      <button class="btn btn-large share-button" id="share" rel="tooltip" title="Share This Course" data-placement="top"><i class="icon-share"></i></button>
      <button class="btn btn-large review-this-class" id="share" rel="tooltip" title="Write A Review" data-placement="top"><i class="icon-pencil"></i></button>
    </div>
    <br><br>
      <p class="bold">Time</p>
      <p class="mb-1em">6:00AM - 7:00AM</p>
      <p class="bold">Days</p>
      <p class="mb-1em">Wednesday's, Friday's</p>
      <p class="bold">Duration</p>
      <p class="mb-1em">10 Weeks</p>
      <p class="bold">Teacher</p>
      <p class="mb-1em">Callum Mundine</p>
      <p class="bold">Location</p>
      <p>Geelong Yoga Center</p>
      <p class="mb-1em">10 High Street, Geelong, 3215</p>
      <button type="button" class="btn mb-1em" id="show-map">Show Map</button>
      <div id="class-map"></div>
      <p class="bold">About This Course</p>
      <p class="mb-1em">Weekly classes are now open for anyone wanting simple yet very effective Chi Kung exercises. Chi Kung is a fundamental aspect of traditional Chinese medicine and can help you manage and improve your overall wellbeing. Its practice leaves you feeling uplifted and positive in your approach to everything you do. You will achieve a healthy mind, a calm spirit and a stronger immune system by its regular practice. (1 hour class)</p>
      <p class="bold">Fees</p>
      <p>Student: $15</p>
      <p>Standard: $18</p>
      <p class="bold mt-1em">Level</p>
      <p>Beginner</p>
    </div>
    <p class="page-heading" style="border-top:1px solid #ddd;">Reviews</p>
    <ul id="review-ul">
      <li>
        <p id="class-name">Beginners Yoga</p>
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
        <p id="class-name">Beginners Yoga</p>
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
  </div>
</div>

<script>
$("#show-map").click(function () {
$("#class-map").toggle();
});
</script>


  <script type="text/javascript">
    $(document).ready(function () {
      $('.share-button').tooltip();
      $('.add-to-calendar').tooltip();
      $('.review-this-class').tooltip();
    });
  </script>


    </div>
  </div>




    <?php include('footer.php'); ?>



    



  </body>
</html>
