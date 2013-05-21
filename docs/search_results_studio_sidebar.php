<div class="span3">  
  <a id="filter-mobile-expand"><p id="side-main-heading">Filter<i class="icon-plus pull-right side-bar-icon"></i></p></a>     
  <div class="accordian-wrapper">
    <div class="accordion" id="accordion2">
      <div class="accordion-group">
        <div class="accordion-heading">
          <p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            Suburbs<i class="icon-plus pull-right side-bar-icon"></i>
          </p>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
          <div class="accordion-inner">
            <ul class="side-list-ul">
              <li><input type="checkbox" class="no-margin"> Select All</li>
              <li><input type="checkbox" class="no-margin"> North Melbourne</li>
              <li><input type="checkbox" class="no-margin"> South Melbourne</li>
              <li><input type="checkbox" class="no-margin"> East Melbourne</li>
              <li><input type="checkbox" class="no-margin"> West Melbourne</li>
              <li><a href="#">Show More</a></li>
              <button type="submit" class="btn k-button btn-mini">Update Results</button>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $("#filter-mobile-expand").click(function () {
  $(".accordian-wrapper").toggle();
  });
</script>