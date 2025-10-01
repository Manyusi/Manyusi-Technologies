<?php include 'inc/header.php'; ?>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            How can I request technical support?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show">
          <div class="accordion-body">You can contact our Help Desk or submit a ticket through the support portal.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Where can I download company software?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse">
          <div class="accordion-body">Visit the Download Center to get the latest versions of our software.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
