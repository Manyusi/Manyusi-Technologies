<?php include 'inc/header.php'; ?>

<section class="py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Help Desk</h2>
    <p class="lead">Submit your issue below and our support team will get back to you.</p>

    <form action="helpdesk-submit.php" method="POST" class="shadow p-4 bg-white rounded">
      <div class="mb-3">
        <label class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Issue</label>
        <textarea name="issue" rows="5" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit Ticket</button>
    </form>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
