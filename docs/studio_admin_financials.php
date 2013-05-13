  <?php include('header.php'); ?>
  <div class="container">

    <div class="row-fluid">

      <?php include('studio_admin_sidebar.php'); ?>

      <div class="span9">
        <div class="wrapper">
          <p class="main-heading">Financials</p>          
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th class="w-10">Date</th>
                  <th class="w-40">Details</th>
                  <th>Amount</th>
                  <th>Fee</th>
                  <th>Total</th>
                  <th>Balance</th>
                </tr>
              </thead>
              <tbody>
                <tr class="booking-fin">
                  <td>7/12/13</td>
                  <td>Booking #24253</td>
                  <td>$50</td>
                  <td>$15</td>
                  <td>$35</td>
                  <td>$150</td>
                </tr>
                <tr class="withdraw-fin">
                  <td>5/12/13</td>
                  <td>Payment Month End 31/11/13</td>
                  <td>$50</td>
                  <td>$15</td>
                  <td>$35</td>
                  <td>$150</td>
                </tr>
                <tr class="booking-fin">
                  <td>31/2/13</td>
                  <td>Excess Booking Fees M/E 31/2/13</td>
                  <td>$50</td>
                  <td>-</td>
                  <td>-</td>
                  <td>$150</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>

