<?php
$title = "Careers";
include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<body>
<!-- Header Section -->

<section class="page-header-section text-white text-center position-relative d-flex align-items-center justify-content-center about-header" style="height: 91vh; background: url('assets/images/hero2.jpg') center center / cover no-repeat;">

  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index: 1;"></div>

  <div class="container position-relative" data-aos="fade-down" style="z-index: 2;">
      <h1 class="fw-bold display-4">Careers at CodexMind</h1>
    <p class="lead">Join our team of innovators and technologists.</p>
  </div>

</section>
<!-- Breadcrumb -->
<section class="breadcrumb-section py-3" style="background-color: #000000ff; border-bottom: 1px solid #1a1a1a;">
  <div class="container d-flex align-items-center">
    <i class="bi bi-house-door-fill text-info me-2 fs-5"></i>
    <a href="index.php" class="text-info text-decoration-none me-2">Home</a>
    <span class="text-white-50 mx-2">/</span>
    <span class="text-white">Career</span>
  </div>
</section>

<!-- Filter + Job Listings -->
<section class="py-5 bg-black text-white">
  <div class="container">
    
    <!-- Filter Section -->
    <div class="row mb-4">
      <div class="col-md-4">
        <select class="form-select bg-dark text-white border-secondary" id="roleFilter">
          <option value="">Filter by Role</option>
          <option value="developer">Developer</option>
          <option value="designer">Designer</option>
          <option value="marketing">Marketing</option>
        </select>
      </div>
      <div class="col-md-4">
        <select class="form-select bg-dark text-white border-secondary" id="locationFilter">
          <option value="">Filter by Location</option>
          <option value="pune">Pune</option>
          <option value="remote">Remote</option>
        </select>
      </div>
      <div class="col-md-4">
        <input type="text" id="searchInput" class="form-control bg-dark text-white border-secondary" placeholder="Search by keyword...">
      </div>
    </div>

    <!-- Job Listings -->
    <div class="row" id="jobList">

      <div class="col-md-6 mb-4 job-card" data-role="developer" data-location="pune">
        <div class="p-4 bg-dark border rounded h-100">
          <h5 class="fw-bold text-info">Full Stack Developer</h5>
          <p class="text-white  mb-1">Location: Pune</p>
          <p class="text-white  mb-2">We're looking for a skilled developer with React & Node.js experience.</p>
         <button class="btn btn-outline-info btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>

        </div>
      </div>

      <div class="col-md-6 mb-4 job-card" data-role="designer" data-location="remote">
        <div class="p-4 bg-dark border rounded h-100">
          <h5 class="fw-bold text-warning">UI/UX Designer</h5>
          <p class="text-white  mb-1">Location: Remote</p>
          <p class="text-white  mb-2">Creative designer with Figma/Adobe XD experience.</p>
          <button class="btn btn-outline-info btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>

        </div>
      </div>

      <div class="col-md-6 mb-4 job-card" data-role="marketing" data-location="pune">
        <div class="p-4 bg-dark border rounded h-100">
          <h5 class="fw-bold text-success">Digital Marketing Executive</h5>
          <p class="text-white  mb-1">Location: Pune</p>
          <p class="text-white  mb-2">Expert in SEO, Google Ads, and social media strategy.</p>
          <button class="btn btn-outline-info btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Application CTA -->
<section class="text-white text-center py-5" style="background: linear-gradient(135deg, #000000, #1a1a1a);">
  <div class="container" data-aos="fade-up">
    <h2 class="fw-bold mb-3">Didn’t find the right role?</h2>
    <p class="mb-4">We’re always looking for great talent. Email us at <a href="mailto:admin@codexmind.in" class="text-info">admin@codexmind.in</a></p>
    <a href="contact.php" class="btn btn-outline-light rounded-pill px-4">Contact HR</a>
  </div>
</section>
<!-- Application Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark text-white border border-secondary">
      <div class="modal-header">
        <h5 class="modal-title" id="applyModalLabel">Apply for a Position</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="career-handler.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name *</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" name="fullname" id="fullname" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control bg-dark text-white border-secondary" name="email" id="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control bg-dark text-white border-secondary" name="phone" id="phone">
          </div>
          <div class="mb-3">
            <label for="coverletter" class="form-label">Cover Letter</label>
            <textarea class="form-control bg-dark text-white border-secondary" name="coverletter" id="coverletter" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <label for="resume" class="form-label">Upload CV/Resume (.pdf only) *</label>
            <input type="file" class="form-control bg-dark text-white border-secondary" name="resume" id="resume" accept=".pdf" required>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="yes" name="consent" id="consent" required>
            <label class="form-check-label" for="consent">
              By submitting your CV, you agree to CodexMind’s data processing for recruitment purposes as per our <a href="#" class="text-info">Privacy Policy</a>.
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-outline-info">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });

  // Filter Logic
  const roleFilter = document.getElementById('roleFilter');
  const locationFilter = document.getElementById('locationFilter');
  const searchInput = document.getElementById('searchInput');
  const jobCards = document.querySelectorAll('.job-card');

  function filterJobs() {
    const role = roleFilter.value.toLowerCase();
    const location = locationFilter.value.toLowerCase();
    const search = searchInput.value.toLowerCase();

    jobCards.forEach(card => {
      const matchesRole = !role || card.dataset.role.includes(role);
      const matchesLocation = !location || card.dataset.location.includes(location);
      const matchesText = card.textContent.toLowerCase().includes(search);

      card.style.display = (matchesRole && matchesLocation && matchesText) ? '' : 'none';
    });
  }

  roleFilter.addEventListener('change', filterJobs);
  locationFilter.addEventListener('change', filterJobs);
  searchInput.addEventListener('input', filterJobs);
</script>
</body>
</html>
