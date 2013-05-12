<div class="span9">
  <div class="wrapper">
    <?php include('business-header.php') ?>
    <?php include('cover-photo.php'); ?>
    <p class="page-heading">Timetable</p>
    <ul class="pager">
	  <li id="earlier"><a href="#">Previous</a></li>
	  <li id="later"><a href="#">Next</a></li>
	</ul>

	<div id="block-schedule">
	      <ul id="schedule-list">
	      	<li id="day-active"><a href="#">Mon, 5th</a></li>
	      	<li><a href="#">Tue, 6th</a></li>
	      	<li><a href="#">Wed, 7th</a></li>
	      	<li><a href="#">Thu, 8th</a></li>
	      	<li><a href="#">Fri, 9th</a></li>
	      	<li><a href="#">Sat, 10th</a></li>
	      	<li><a href="#">Sun, 11th</a></li>
	      </ul>
	    <table class="table">
	      <thead>
	        <tr>
	          <th>Class</th>
	          <th>Studio</th>
	          <th>Time</th>
	          <th>Price</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td class="w-25">Bikram Yoga</td>
	          <td class="w-25">Geelong Yoga Studio</td>
	          <td class="w-15">7:30PM</td>
	          <td class="w-10">$15</td>
	          <td class="schedule-button align-right w-25">
	          	<a href="#" rel="tooltip" title="Follow Studio" data-placement="top" class="follow-studio"><button type="button" class="btn"><i class="icon-heart-empty"></i></button></a>
	          	<a href="#" rel="tooltip" title="Add To Schedule" data-placement="top" class="bookmark-class"><button type="button" class="btn"><i class="icon-calendar"></i></button></a>
	          	<button type="button" class="btn">Book</button>
	          </td>
	        </tr>
	      </tbody>
	    </table>
    </div>

    <!-- Tooltip -->
   
	<script type="text/javascript">
	  $(document).ready(function () {
	    $('.follow-studio').tooltip();
	    $('.bookmark-class').tooltip();
	  });
	</script>


    <div id="mobile-schedule">
	    <p class="mobile-day">Monday, 25th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Tuesday, 26th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Wednesday, 27th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Thursday, 28th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Friday, 29th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Saturday, 30th</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <p class="mobile-day">Sunday, 31st</p>
	    <a href="#" class="mobile-class-link">
		    <div class="mobile-class">
		    	<p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
		    	<p>With Callum Mundine<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
		    </div>
	    </a>

	    <ul class="pager" id="mobile-pager-bottom">
		  <li id="earlier"><a href="#">Previous</a></li>
		  <li id="later"><a href="#">Next</a></li>
		</ul>
	</div>
  </div>
</div>

