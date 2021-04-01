<?php include('header.php'); ?>
<?php include('slider.php')?>

  <!-- Main content -->
    <div class="main_content">

      <!-- projects -->

      <!-- Programs -->
      <div class="container programs pb-4">
        <span class="title">Doctors List</span>
        <div class="card-group">
          <div class="card">
            <img
              class="card-img-top"
              src="https://nefscun.org.np/wp-content/uploads/2018/12/ANNUAL-GENERAL-MEETING-ATTENDANCE.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Doctor Name</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
          <div class="card">
            <img
              class="card-img-top"
              src="https://nefscun.org.np/wp-content/uploads/2018/12/28th-ANNUAL-GENERAL-MEETING-2.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Doctor Name</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
          <div class="card">
            <img
              class="card-img-top"
              src="https://nefscun.org.np/wp-content/uploads/2018/12/ANNUAL-GENERAL-MEETING-ATTENDANCE.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Doctor Name</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

 	<?php include('footer.php'); ?>


	
</div>	<!--  containerFluid Ends -->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
  <script>
    $("[data-trigger]").on("click", function () {
      var trigger_id = $(this).attr("data-trigger");
      $(trigger_id).toggleClass("show");
      $("body").toggleClass("offcanvas-active");
    });

    // close button
    $(".btn-close").click(function (e) {
      $(".navbar-collapse").removeClass("show");
      $("body").removeClass("offcanvas-active");
    });
  </script>

	 
	
</body>
</html>

