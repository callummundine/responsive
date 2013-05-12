  <?php include('header.php'); ?>
  <div class="container">
    <br>
    <div id="big-map" class="wrapper">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/?ie=UTF8&amp;ll=-36.605471,145.469483&amp;spn=5.237815,11.623535&amp;t=m&amp;z=7&amp;output=embed"></iframe>
    </div>

    <div class="row-fluid">

      <?php include('search_results_studio_sidebar.php'); ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

    <div class="span9">

    <ul class="nav nav-tabs no-margin" id="scc-tab">
        <li><a href="search_results_studios.php">Studios</a></li>
        <li><a href="search_results_classes.php">Classes</a></li>
        <li class="active"><a href="search_results_courses.php">Courses</a></li>
      </ul>

      <div class="wrapper no-margin">
        <ul id="search-results-courses">
          <li>
            <p id="class-name"><a href="#">Beginners Yoga</a><button type="button" class="btn ml-1em pull-right" id="book-now-button"></i> Book Now!</button></p>
            <p class="bold">Geelong Yoga Center</p>
            <p><i class="icon-map-marker"></i> 125 High St, Geelong</p>
            <p>Wednesday's, Friday's: 5:30PM - 6:30PM</p>
            <p class="mb-1em">Starting on 25th May 2013 and running for 10 weeks.</p>
            <p><a href="#" id="show-details-course">Show Details</a></p>
            <p id="details-course">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </li>
        </ul>
        <p class="p-1em align-center"><a href="#" class="align-center">See More....</a></p>
      </div>
    </div>
    </div>

    <div class="wrapper">
      <p class="page-heading">Articles</p>
      <ul class="results-articles">
        <li>
          <div id="article-photo"></div>
          <div id="article-content">
            <p id="article-title">Article Name</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </li>
        <li>
          <div id="article-photo"></div>
          <div id="article-content">
            <p id="article-title">Article Name</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </li>
        <li>
          <div id="article-photo"></div>
          <div id="article-content">
            <p id="article-title">Article Name</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </li>
      </ul>
    </div>

  </div>


    <?php include('footer.php'); ?>

  </body>
</html>

<script>
 
$("#show-details-course").click(function () {
$("#details-course").toggle();
});
</script>