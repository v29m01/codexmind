
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
   <meta name="description" content="<?php echo $description; ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/favicon/android-chrome-512x512.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css\style.css">
<style>
  .dropdown-menu {
   
    width: 70vw;
    left: 50%;
    transform: translateX(-80%);
  }

  .dropdown-menu .icon {
    color: #007bff;
  }

.small{
  border-radius:5px;
  background-color:rgba(0, 123, 255, 0.08);
  padding:2px 12px;
  
  border-color:white;
}

  @media (max-width: 768px) {
    .dropdown-menu {
      width: 100% !important;
      left: 0 !important;
      transform: none !important;
      padding: 1rem !important;
    }

    .dropdown-menu .col-md-3 {
      flex: 0 0 100%;
      max-width: 100%;
      margin-bottom: 1rem;
    }
  }

  @media (min-width: 900px) {
  .navbar .dropdown:hover .dropdown-menu {
    display: block;
    visibility: visible;
    opacity: 1;
    transition: all 0.3s ease;
  }

  /* Optional: Remove delay when hovering out */
  .navbar .dropdown-menu {
    margin-top: 0;
  }
}
.custom-navbar {
  background-color: rgba(0, 0, 0, 0) !important; /* semi-transparent black */
  z-index: 1030; /* ensure it stays on top */
  backdrop-filter: blur(6px);
}


.nav-item .nav-link{
  font-weight: 500;
  color: white;
}

.navbar .nav-link.active {
  color:#e93237; /* Your desired color */
  font-weight: 500;         /* Optional */
  
}
.nav-link.active:hover {
  color: white;           /* Hover color */
 
}
.nav-link:hover{
   color: #28AAE1;
}
.col-md-3 i{
  color: aquamarine;
}
.col-md-3 h6{
  color: aliceblue;
}
.col-md-3{
  border: 2px solid black;
}
.dropdown-menu{
  background-color:rgba(0 0 0 / 61%) ;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show{
  color: #e93237;
}
.navbar-toggler {
  border-color: white; /* Optional: white border around button */
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

</style>


  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt="" width="200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           <li class="nav-item mx-3">
  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
</li>

             
  <li class="nav-item dropdown mx-3">
  <a class="nav-link dropdown-toggle" href="about.php" role="button" onclick="window.location.href='about.php';" onmouseover="this.setAttribute('data-bs-toggle','dropdown')" aria-expanded="false">

    About
  </a>
  <div class="dropdown-menu  p-3" >
    <div class="row text-center">
    
      <div class="col-md-3 p-4 ">
        <a href="#" class="text-decoration-none text-dark">
          <i class="bi-journal-bookmark fs-2 mb-2" style="color:#ff4a00"></i>
          <h6 style="line-height:28px">Our Story</h6>
          
          <button class="small" style="color:#ff4a00">Read More</button>
        </a>
      </div>
      <div class="col-md-3 p-4">
        <a href="#" class="text-decoration-none text-dark">
          <i class="bi-star-fill fs-2 mb-2" style="color:#84EE02"></i>
          <h6 style="line-height:28px">Core Values</h6>
     
          <button class="small "  style="color:#84EE02">Read More</button>
        </a>
      </div>
      <div class="col-md-3 p-4">
        <a href="#" class="text-decoration-none text-dark">
          <i class="bi-trophy fs-2 mb-2" style="color:#FF4CBE"></i>
          <h6 style="line-height:28px">Our Mission</h6>
          <button class="small "  style="color:#FF4CBE">Read More</button>
        </a>
      </div>
      <div class="col-md-3 p-4">
        <a href="#" class="text-decoration-none text-dark">
          <i class="bi-binoculars fs-2 mb-2" style="color:#E62929"></i>
          <h6 style="line-height:28px">Our Vision</h6>
          <button class="small "  style="color:#E62929">Read More</button>
        </a>
      </div>
    </div>
  </div>
</li>


          <li class="nav-item dropdown mx-3">
  <a class="nav-link dropdown-toggle text-white" href="services.php" role="button" onclick="window.location.href='services.php';" onmouseover="this.setAttribute('data-bs-toggle','dropdown')" aria-expanded="false">

    Services
  </a>

  <div class="dropdown-menu p-3 text-white" style="width: 80vw; background-color:rgb(0 0 0 / 69%); left: 50%; transform: translateX(-80%);">
    <div class="row">

      <!-- Custom Software -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-code-slash fs-2 text-primary me-2"></i>
          <h6 class="mb-0">Custom Software</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Enterprise Solutions</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>CRM/ERP Systems</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Workflow Automation</li>
        </ul>
      </div>

      <!-- AI & ML -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-cpu fs-2 text-info me-2"></i>
          <h6 class="mb-0">AI & ML</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Predictive Analytics</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>NLP Solutions</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Custom ML Models</li>
        </ul>
      </div>

      <!-- Cloud -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-cloud-upload fs-2 text-primary me-2"></i>
          <h6 class="mb-0">Cloud Computing</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Cloud Migration</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Scalable Deployments</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Security & Backups</li>
        </ul>
      </div>

      <!-- Mobile Apps -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-phone fs-2 text-warning me-2"></i>
          <h6 class="mb-0">Mobile Apps</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>iOS & Android Apps</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Flutter/React Native</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Play Store Deployment</li>
        </ul>
      </div>

      <!-- Web Applications -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-laptop fs-2 text-success me-2"></i>
          <h6 class="mb-0">Web Applications</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Responsive Web Portals</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Single Page Apps</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Secure Web APIs</li>
        </ul>
      </div>

      <!-- UI/UX -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-brush fs-2 text-danger me-2"></i>
          <h6 class="mb-0">UI/UX Design</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>User Research</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Wireframes & Prototypes</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Design Systems</li>
        </ul>
      </div>

      <!-- DevOps -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-diagram-3 fs-2 text-info me-2"></i>
          <h6 class="mb-0">DevOps & Automation</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>CI/CD Pipelines</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Automated Testing</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Docker & K8s</li>
        </ul>
      </div>

      <!-- Technology Consulting -->
      <div class="col-md-3 p-3">
        <div class="d-flex align-items-center mb-2">
          <i class="bi bi-person-lines-fill fs-2 text-light me-2"></i>
          <h6 class="mb-0">Consulting</h6>
        </div>
        <ul class="list-unstyled">
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Digital Strategy</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Architecture Consulting</li>
          <li><i class="bi bi-arrow-right-circle me-2 text-secondary"></i>Technology Audit</li>
        </ul>
      </div>

    </div>
  </div>
</li>

<li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="career.php">Career </a>
            </li>

            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="contact.php">Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
