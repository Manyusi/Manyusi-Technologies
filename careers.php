<?php include 'inc/header.php'; ?>

<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Job Application Form</h2>
    <form action="submit-career.php" method="POST" enctype="multipart/form-data" class="col-md-8 mx-auto shadow p-4 bg-white rounded">
      
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="fullname" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Position Applying For</label>
        <input type="text" name="position" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Upload CV (PDF/DOC)</label>
        <input type="file" name="cv" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Cover Letter</label>
        <textarea name="cover_letter" rows="5" class="form-control" required></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary w-100">Submit Application</button>
    </form>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
