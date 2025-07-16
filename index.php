<?php
$title = "Home"; 
include_once('header.php'); 
?>

<!DOCTYPE html>

<html lang="en">

<body>


<section id="hero" class="position-relative ">
  <div id="heroCarousel" class="carousel slide carousel-fade " data-bs-ride="carousel" data-bs-interval="5000">
    
    <!-- Vertical Numbered Indicators on Left -->
    <div class="vertical-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active">1</button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1">2</button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2">3</button>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner ">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="hero-slide">
          <img src="assets/images/hero1.jpg" class="w-100 h-100 object-fit-cover">
          <div class="overlay"></div>
          <div class="content px-5">
            <h1 class="display-4 fw-bold text-white">Transforming Complexity into Clarity</h1>
            <p class="lead text-white">Innovate. Build. Elevate.</p>
            <a href="#contact" class="btn btn-outline-light rounded-pill px-4 mt-3">Get Started</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="hero-slide">
          <img src="assets/images/hero2.jpg" class="w-100 h-100 object-fit-cover">
          <div class="overlay"></div>
          <div class="content px-5">
            <h1 class="display-4 fw-bold text-white">AI, Cloud & Mobile Apps</h1>
            <p class="lead text-white">We build scalable, future-ready solutions.</p>
            <a href="#services" class="btn btn-outline-light rounded-pill px-4 mt-3">Explore Services</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="hero-slide">
          <img src="assets/images/hero3.jpg" class="w-100 h-100 object-fit-cover">
          <div class="overlay"></div>
          <div class="content px-5">
            <h1 class="display-4 fw-bold text-white">Your Trusted Digital Partner</h1>
            <p class="lead text-white">Let’s build something amazing together.</p>
            <a href="#about" class="btn btn-outline-light rounded-pill px-4 mt-3">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="custom-shape-divider-bottom-1751913432">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
 <!-- Services -->
<section class="who-we-are-section py-5" id="about" style="background-color:#000000;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Text Column -->
      <div class="col-md-6" data-aos="fade-right">
        <h1 class="fw-bold mb-3">WHO WE ARE</h1>
        <p style="color: #f4f4f4;">
          At CodexMind, we simplify the complex. We specialize in crafting intelligent digital solutions powered by AI, cloud, and custom software.
        </p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle-fill text-primary me-2"></i> End-to-end product development</li>
          <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Agile & transparent process</li>
          <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Innovation-driven culture</li>
          <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Client-Centric Discovery</li>
          <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cloud & DevOps Integration</li>
        </ul>
        <a href="#services" class="btn btn-primary rounded-pill px-4 mt-3"> Mobile & Web Development</a>
      </div>

      <!-- Right Image Column -->
      <div class="col-md-6 text-center" data-aos="fade-left">
        <img src="assets\images\why codexmind.png" alt="About CodexMind" class="img-fluid rounded " width="500">
      </div>
    </div>
  </div>
</section>
<!-- CORE VALUES / WHY CHOOSE US SECTION -->

<section class="core-values-section position-relative text-white overflow-hidden pt-5 pb-5">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="bg-video">
    <source src="assets\12421439_3840_2160_30fps-1.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- Overlay (for dark effect) -->
  <div class="video-overlay"></div>

  <!-- Foreground Content -->
  <div class="container position-relative">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Why Choose CodexMind</h2>
      <p>We are driven by purpose, precision, and people.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="core-card text-center p-4 h-100">
          <i class="bi bi-lightbulb fs-1 text-info"></i>
          <h5 class="mt-3">Innovation</h5>
          <p>We embrace new ideas, technologies, and methods to deliver cutting-edge digital solutions.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="core-card text-center p-4 h-100">
          <i class="bi bi-shield-check fs-1 text-success"></i>
          <h5 class="mt-3">Transparency</h5>
          <p>We believe in open communication, accountability, and mutual trust in every engagement.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="core-card text-center p-4 h-100">
          <i class="bi bi-gem fs-1 text-warning"></i>
          <h5 class="mt-3">Quality</h5>
          <p>From code to customer service, we prioritize excellence in everything we do.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="core-card text-center p-4 h-100">
          <i class="bi bi-people fs-1 text-primary"></i>
          <h5 class="mt-3">Collaboration</h5>
          <p>We work together to achieve success, sharing knowledge and supporting one another.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="core-card text-center p-4 h-100">
        <i class="bi bi-heart-fill fs-1 text-danger"></i>
          <h5 class="mt-3">Customer Focus</h5>
          <p>Our clients are at the center of everything we do, and their success is our priority.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
        <div class="core-card text-center p-4 h-100">
          <i class="bi bi-patch-check fs-1 text-info"></i>
          <h5 class="mt-3">Integrity</h5>
          <p>We act with honesty, fairness, and responsibility in all our decisions and actions.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ✅ TECH STACK / EXPERTISE SECTION -->
<section class="tech-stack-section py-5" style="background-color:rgba(0, 0, 0, 1);">
  <div class="container">
    <div class="text-center text-white mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Our Technology Expertise</h2>
      <p class="">From modern frameworks to enterprise-grade platforms, we’ve got it covered.</p>
    </div>
    <div class="row text-center text-white" >
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" style="border:2px solid white;width:20vw;">
        <i class="bi bi-cpu fs-2 text-info"></i>
        <p class="mt-2">AI / ML</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="100" style="border:2px solid white;width:20vw;">
        <i class="bi bi-cloud-arrow-up fs-2 text-primary"></i>
        <p class="mt-2">Cloud</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="200" style="border:2px solid white;width:20vw;">
        <i class="bi bi-phone fs-2 ext-warning"></i>
        <p class="mt-2">Mobile</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="300" style="border:2px solid white;width:20vw;">
        <i class="bi bi-code-slash fs-2 text-success"></i>
        <p class="mt-2">Custom Software</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="400" style="border:2px solid white;width:20vw;">
        <i class="bi bi-laptop fs-2 text-light"></i>
        <p class="mt-2">Web Apps</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="500" style="border:2px solid white;width:20vw;">
        <i class="bi bi-brush fs-2 text-danger"></i>
        <p class="mt-2">UI/UX</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="600" style="border:2px solid white;width:20vw;">
        <i class="bi bi-diagram-3 fs-2 text-info"></i>
        <p class="mt-2">DevOps</p>
      </div>
      <div class="col-6 col-md-3 m-2" data-aos="zoom-in" data-aos-delay="700" style="border:2px solid white;width:20vw;">
        <i class="bi bi-people fs-2 text-warning"></i>
        <p class="mt-2">Consulting</p>
      </div>
    </div>
  </div>
</section>


<?php
include_once('footer.php'); 
?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

</body>
</html>