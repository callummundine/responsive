  <?php include('header.php'); ?>
  <div class="container">
    <div id="big-map" class="wrapper">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/?ie=UTF8&amp;ll=-36.605471,145.469483&amp;spn=5.237815,11.623535&amp;t=m&amp;z=7&amp;output=embed"></iframe>
    </div>

    <div class="row-fluid">

      <?php include('search_results_classes_sidebar.php'); ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

     <div class="span9">

        <ul class="nav nav-tabs no-margin" id="scc-tab">
          <li class="tab-width"><a href="search_results_studios.php">Studios</a></li>
          <li class="active tab-width"><a href="search_results_classes.php">Classes</a></li>
          <li class="tab-width"><a href="search_results_courses.php">Courses</a></li>
        </ul>

  <!--       Desktop Search Results -->
        <div class="wrapper no-margin" id="desktop-search-results">
          <ul id="search-results-classes">
            <li>
              <table id="class-table">
                <th class="w-50">
                  <a href="#" id="class-name">Bikram Yoga</a>
                  <p class="bold">Geelong Yoga Center</p>
                  <p class="normal"><i class="icon-map-marker"></i> 125 High St, Geelong</p>
                </th>
                <th id="class-table-button">
                  <button type="button" class="btn ml-1em" id="book-now-button"></i> Book Now!</button><a href="#" rel="tooltip" title="Add To Schedule" data-placement="top" class="add-to-schedule"><button type="button" class="btn ml-1em"><i class="icon-calendar black"></i></button></a>
                </th>
              </table>
              <table id="listing-table">
                <thead>
                  <tr>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Instructor</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>5:30PM - 6:30PM</td>
                    <td>$12 - $15</td>
                    <td>Callum Mundine</td>
                    <td>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star"></i>
                      <i class="icon-star-empty"></i>
                      <i class="icon-star-empty"></i>
                      (5)
                    </td>
                  </tr>
                </tbody>
              </table>
              <a class="link" id="show-details">Show Details</a>
              <p id="class-about-toggle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </li>
          </ul>
        <p class="p-1em align-center"><a href="#" class="align-center">See More....</a></p>
        </div>
      </div>
      </div>

      <!--       Mobile Search Results -->
        <div class="wrapper no-margin" id="mobile-class-results">
          <ul id="search-results-classes">
            <li>
              <table id="class-table">
                <th class="w-50">
                  <a href="#" id="class-name">Bikram Yoga</a>
                  <p class="bold">Geelong Yoga Center</p>
                  <p class="normal"><i class="icon-map-marker"></i> 125 High St, Geelong</p>
                </th>
                <th id="class-table-button">
                  <button type="button" class="btn ml-1em" id="book-now-button"></i> Book</button><a href="#" rel="tooltip" title="Add To Schedule" data-placement="top" class="add-to-schedule"><button type="button" class="btn ml-1em"><i class="icon-calendar black"></i></button></a>
                </th>
              </table>
              <p>5:30PM - 6:30PM<span class="pull-right">$12 - $15</span></p>

            </li>
          </ul>
        <p class="p-1em align-center"><a href="#" class="align-center">See More....</a></p>
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
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.add-to-schedule').tooltip();
    });
  </script>
  <script>
    $('#show-details').click(function() {
      $('#class-about-toggle').toggle()
    });
  </script>

    <?php include('footer.php'); ?>

  </body>
</html>
