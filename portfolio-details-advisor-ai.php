<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Advisor AI</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/img/favicon.png" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="portfolio-details-page">

  <header id="header" class="header dark-background d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="header-container d-flex flex-column align-items-start">
      <a href="index.php" class="site-logo" aria-label="N.V Home">
        <span class="badge-logo">N.V</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero"><i class="bi bi-house navicon"></i>Home</a></li>
          <li><a href="index.php#about"><i class="bi bi-person navicon"></i> About</a></li>

          <li><a href="index.php#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
          <li><a href="index.php#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        </ul>
      </nav>

      <div class="social-links text-center">
          <a href="mailto:naveen8657@gmail.com" class="gmail"><i class="bi bi-envelope"></i></a>
        <a href="https://www.facebook.com/vanganaveen" target="_blank" class="facebook"><i
            class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/iam_naveenvanga/" target="_blank" class="instagram">
          <i class="bi bi-instagram"></i></a>

        <a href="https://www.linkedin.com/in/naveen-vanga-4bb7a7104/" target="_blank" class="linkedin"><i
            class="bi bi-linkedin"></i></a>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Advisor AI</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Advisor AI</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/advisor-ai-03.jpg" alt="Portfolio Image" class="img-fluid"
                    loading="lazy">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/advisor-ai-01.jpg" alt="Portfolio Image" class="img-fluid"
                    loading="lazy">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/advisor-ai-02.jpg" alt="Portfolio Image" class="img-fluid"
                    loading="lazy">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-left" data-aos-delay="200">
              <h3>Project Information</h3>
              <ul>
                <li><strong>Role</strong>: UI/UX Designer</li>
                <li><strong>Client</strong>: Texas A&M University, Texas, USA</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Project Overview</h2>
              <p>
                An AI-powered student advising platform that assists students with academic planning, course selection,
                and career guidance. Designed to provide personalized recommendations based on student data and academic
                policies.
              </p>
              <div class="features mt-4">
                <h3>Category</h3>
                <div class="row gy-3">
                  <div class="col-md-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                      <i class="bi bi-check-circle-fill"></i>
                      <h4>Challenges :</h4>
                      <ul>
                        <li>Students lacked an easy way to plan courses and track degree progress on mobile devices.
                        </li>
                        <li>Advisors struggled to provide timely guidance to a large student population.</li>
                        <li>Complex program rules were difficult to visualize in a small screen layout.</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                      <i class="bi bi-menu-button navicon"></i>
                      <h4>Contributions :</h4>
                      <ul>
                        <li>Designed mobile-friendly dashboards with degree maps and progress bars for quick status
                          checks.</li>
                        <li>Created intuitive navigation patterns (tab bars, swipe interactions) optimized for iOS and
                          Android.</li>
                        <li>Built conversational AI chat for real-time Q&A, reducing dependency on advisor appointments.
                        </li>
                        <li>Prototyped wireframes and interactive mobile flows in Figma and validated with student test
                          groups.</li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="600">
                      <i class="bi bi-graph-up"></i>
                      <h4>Impact:</h4>
                      <ul>
                        <li>Reduced advising wait times by 40% through AI-guided self-service.</li>
                        <li>Increased student adoption with a 70% higher engagement on mobile vs web portals.</li>
                        <li>Improved clarity for degree requirements, boosting timely graduation rates.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>