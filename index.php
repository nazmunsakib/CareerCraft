<?php 
  include "parts/header.php"; 
  ?>

  <!-- Banner Start -->
  <section class="cc-banner">
      <div class="container">
          <div class="cc-banner-content">
              <h1><?php echo "Career Craft"; ?></h1>
          </div>
      </div>
  </section>
  <!-- Banner End -->

  <!-- Job listing Start -->
  <section class="cc-job-listing">
      <div class="container">
          <div class="cc-job-board-area">
          <?php 
            include "parts/filter.php"; 
            include "parts/job-list.php"; 
            ?>
          </div>
      </div>
  </section>
  <!-- Job listing End -->

<?php include "parts/footer.php"; ?>