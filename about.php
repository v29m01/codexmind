<?php
$title = "About"; 
include_once('header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<body>

<!-- Page Header -->
<section class="page-header-section text-white text-center position-relative d-flex align-items-center justify-content-center about-header" style="height: 91vh; background: url('assets/images/about-hero-2.jpg') center center / cover no-repeat;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index: 1;"></div>
  <div class="container position-relative" data-aos="fade-down" style="z-index: 2;">
    <h1 class="fw-bold display-4">About CodexMind</h1>
    <p class="lead">Empowering businesses through innovation, intelligence, and integrity.</p>
  </div>

</section>
<!-- Breadcrumb -->

<section class="breadcrumb-section py-3" style="background-color: #000000ff; border-bottom: 1px solid #1a1a1a;">
  <div class="container d-flex align-items-center">
    <i class="bi bi-house-door-fill text-info me-2 fs-5"></i>
    <a href="index.php" class="text-info text-decoration-none me-2">Home</a>
    <span class="text-white-50 mx-2">/</span>
    <span class="text-white">About</span>
  </div>
</section>



<!-- Who We Are Section -->
<section class="py-5 bg-black text-white" id="who-we-are">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right">
        <img src="assets/images/why codexmind.png" alt="Who We Are" class="img-fluid rounded">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2 class="fw-bold mb-4">Who We Are</h2>
        <p class="text-white">At <strong>CodexMind</strong>, We are a forward-thinking software development company specializing in scalable, robust, and intelligent digital solutions. Our core strength lies in turning complex business challenges into seamless digital experiences—driven by innovation, backed by technology, and guided by purpose.With deep expertise in custom software development, AI & ML, cloud computing, and mobile applications, we help startups and enterprises alike navigate their digital transformation journeys with confidence.
        <br>
        We offer a full spectrum of digital services to meet modern business needs:

</p>
        <ul class="list-unstyled">
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> Custom Software Development </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> AI & Machine Learning Solutions </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> Cloud Computing </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> Mobile App Development</li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> Web Application Development </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> UI/UX Design </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> DevOps & Automation </li>
  <li><i class="bi bi-arrow-right-circle text-info me-2"></i> Technology Consulting </li>
</ul>

      </div>
    </div>
  </div>
</section>

<!-- Mission Vision Values -->
<section class="py-5 text-white position-relative overflow-hidden">
  
  <video autoplay muted loop playsinline class="bg-video">
    <source src="assets/12421439_3840_2160_30fps-1.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- Overlay -->
  <div class="video-overlay"></div>

  <div class="container position-relative" style="z-index: 3;">
    <div class="text-center mb-5" data-aos="zoom-in">
      <h2 class="fw-bold">Our Mission, Vision & Values</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up">
        <div class="p-4 border rounded h-100 bg-black">
          <h5 class="text-info fw-bold">Mission</h5>
          <p class="text-white">To empower businesses with smart, scalable, and impactful digital solutions that drive innovation and success.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="p-4 border rounded h-100 bg-black">
          <h5 class="text-warning fw-bold">Vision</h5>
          <p class="text-white">To be a global leader in intelligent software engineering by delivering excellence and enabling digital transformation.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 border rounded h-100 bg-black">
          <h5 class="text-success fw-bold">Core Values</h5>
          <ul class="text-white ps-3">
            <li>Integrity & Transparency</li>
            <li>Client-Centric Thinking</li>
            <li>Innovation-Driven Culture</li>
            <li>Agility & Excellence</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Team Section -->
<section class="py-5 bg-black text-white" id="team">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Meet Our Team</h2>
      <p class="text-white">A diverse group of technologists, creatives, and strategists driving CodexMind forward.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <!-- Team Member -->
      <div class="col-md-3 text-center" data-aos="zoom-in">
        <img src="assets\images\team-1.jpg" class="img-fluid rounded-circle mb-3 " alt="Team Member" >
        <h6 class="fw-bold">Founder name</h6>
        <p class="text-white-50">Founder & Tech Lead</p>
      </div>
      <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="150">
        <img src="assets\images\team-2.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member">
        <h6 class="fw-bold">Team Person</h6>
        <p class="text-white-50">Cloud Architect</p>
      </div>
      <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="300">
        <img src="assets\images\team-3.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member">
        <h6 class="fw-bold">Team Person</h6>
        <p class="text-white-50">UI/UX Specialist</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 text-white text-center" style="background: linear-gradient(135deg, #0f0f0f, #1a1a1a);">
  <div class="container" data-aos="fade-up">
    <h2 class="fw-bold">Let’s Build Something Great Together</h2>
    <p class="mb-4">Whether you're a startup or an enterprise, we are ready to help you grow digitally.</p>
    <a href="contact.php" class="btn btn-outline-light rounded-pill px-4">Contact Us</a>
  </div>
</section>

<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>
</body>
</html>
