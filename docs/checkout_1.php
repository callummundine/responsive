  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('user_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
      <div class="wrapper">
        <p class="main-heading">Checkout</p>
        <div class="p-1em">
          <p id="class-name">Bikram Yoga</p>
          <br>
          <p>Wednesday, 25th April, 2013</p>
          <p>5:30PM - 6:30PM</p>
          <br>
          <p class="bold">Geelong Yoga Center</p>
          <p>125 High St, Geelong, 3215</p>
          <br>
          <p class="mb-1em">Who do you want to book for?</p>
          <form class="form-horizontal">
            <ol id="checkout-ol">
              <li>
                <input type="text" class="span12 mb-1em" placeholder="First Name" required><br>
                <input type="text" class="span12 mb-1em" placeholder="Surname"required><br>
                <select class="span6">
                  <option>Standard: $28</option>
                  <option>Student: $25</option>
                </select>
                <br><br>  
                <button type="button" class="btn"><i class="icon-remove"></i></button><button type="button" class="btn ml-1em">Add Someone Else!</button>
              </li>

              <li>
                <input type="text" class="span12 mb-1em" placeholder="First Name" required><br>
                <input type="text" class="span12 mb-1em" placeholder="Surname" required><br>
                <select class="span6">
                  <option>Standard: $28</option>
                  <option>Student: $25</option>
                </select>
                <br><br>  
                <button type="button" class="btn"><i class="icon-remove"></i></button><button type="button" class="btn ml-1em">Add Someone Else!</button>
              </li>

            </ol>
            <a href="checkout_2.php"><button class="btn btn-primary btn-large w-50">Checkout</button></a>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
