<?php include "parts/header.php"; ?>

  <!-- Banner Start -->
  <section class="cc-banner">
      <div class="container">
          <div class="cc-banner-content">
              <h1><?php echo "Add New Job"; ?></h1>
          </div>
      </div>
  </section>
  <!-- Banner End -->

<!-- Job listing Start -->
<section class="cc-job-listing">
    <div class="container">
        <form action="includes/actions.php" method="POST">
            <div class="form-group job-form-group">
                <label for="title"><?php echo "Job Title"; ?></label>
                <input id="title" type="text" name="name" placeholder="Job Title" value="Sr.Software Engineer" required>
            </div>
            <div class="form-group job-form-group">
                <label for="description"><?php echo "Description"; ?></label>
                <textarea id="description" name="description" placeholder="Description" rows="6" required></textarea>
            </div>
            <div class="form-group job-form-group">
                <label for="location"><?php echo "Location"; ?></label>
                <input id="location" type="text" name="location" placeholder="Location" required>
            </div>
            <div class="form-group job-form-group">
                <label for="salary_range"><?php echo "Salary Range"; ?></label>
                <input id="salary_range" type="text" name="salary_range" placeholder="Salary Range" value="$2000 - $6000" required>
            </div>
            <div class="form-cc-user-type job-form-group">
                <label for="job_type"><?php echo "Job Type"; ?></label>
                <select id="job_type" name="job_type" required>
                    <option value=""><?php echo "Select Job Type"; ?></option>
                    <option value="full_time"><?php echo "Full Time"; ?></option>
                    <option value="part_time"><?php echo "Part Time"; ?></option>
                    <option value="freelance"><?php echo "Freelance"; ?></option>
                    <option value="contract"><?php echo "Contract"; ?></option>
                </select>
            </div>
            <input type="hidden" name="user-id">
            <button id="add-new-job-btn" name="add-new-job" type="submit"><?php echo "Add Job"; ?></button>
        </form>
    </div>
</section>
<!-- Job listing End -->

<?php include "parts/footer.php"; ?>