<?php
session_start();
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['success']);
$title = "Contact";
include_once('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<body>

<!-- Header Section -->

<section class="page-header-section text-white text-center position-relative d-flex align-items-center justify-content-center about-header" style="height: 91vh; background: url('assets/images/hero2.jpg') center center / cover no-repeat;">

  <!-- Optional dark overlay for readability -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index: 1;"></div>

  <!-- Foreground content -->
  <div class="container position-relative" data-aos="fade-down" style="z-index: 2;">
    <h1 class="fw-bold display-4">Contact Us</h1>
    <p class="lead">Let’s collaborate to build something extraordinary.</p>
  </div>

</section>
<!-- Breadcrumb -->
<section class="breadcrumb-section py-3" style="background-color: #000000ff; border-bottom: 1px solid #1a1a1a;">
  <div class="container d-flex align-items-center">
    <i class="bi bi-house-door-fill text-info me-2 fs-5"></i>
    <a href="index.php" class="text-info text-decoration-none me-2">Home</a>
    <span class="text-white-50 mx-2">/</span>
    <span class="text-white">Contact</span>
  </div>
</section>


<!-- Contact Info + Form -->
<section class="py-5 bg-black text-white">
  <div class="container">
    <div class="row g-5 align-items-start">
      
      <!-- Contact Information -->
      <div class="col-md-5" data-aos="fade-right">
        <h4 class="fw-bold mb-4">Get in Touch</h4>
        <p><i class="bi bi-geo-alt-fill text-info me-2"></i>Office No 106, VTP Square, Mahalunge, Baner, Pune</p>
        <p><i class="bi bi-envelope-fill text-info me-2"></i><a href="mailto:admin@codexmind.in" class="text-white text-decoration-none">admin@codexmind.in</a></p>
        <p><i class="bi bi-telephone-fill text-info me-2"></i><a href="tel:+919359415820" class="text-white text-decoration-none">+91 93594 15820</a></p>
        // <div class="mt-4">
        //   <h6 class="fw-bold">Follow Us:</h6>
        //   <a href="#" class="text-info fs-4 me-3"><i class="bi bi-linkedin"></i></a>
        //   <a href="#" class="text-info fs-4 me-3"><i class="bi bi-instagram"></i></a>
        //   <a href="#" class="text-info fs-4"><i class="bi bi-facebook"></i></a>
        // </div>
      </div>

      <!-- Contact Form -->
      <div class="col-md-7" data-aos="fade-left">
        <h4 class="fw-bold mb-4">Send a Message</h4>
        
<?php if ($success): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= htmlspecialchars($success); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
        <form action="contact-handler.php" method="POST" class="contact-form">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" name="name" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control bg-dark text-white border-secondary" name="email" id="email" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" name="subject" id="subject">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control bg-dark text-white border-secondary" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-outline-info rounded-pill px-4">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- Google Maps Embed (Optional) -->
<section class="map-section">
  <iframe src="https://www.google.com/maps?q=VTP%20Square%20Mahalunge%20Baner%20Pune&output=embed" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" class="mb-0"></iframe>
</section>

<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>
</body>
</html>
