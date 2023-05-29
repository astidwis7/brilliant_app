<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Brilliant</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-2 d-none d-sm-block">

         <div class="container">
          <div class="row align-items-center">
            <div class="col-auto d-none d-lg-block">
              <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>Jl. D.I Panjaitan No. 128 Purwokerto 53147, Jawa Tengah - Indonesia </span></p>
            </div>
            <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
              <ul class="list-unstyled list-inline my-2">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
              </ul>
            </div>
            <div class="col-auto">
              <!-- <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">brilliant@outlook.com </a></p> -->
            </div>
          </div>
        </div> 
        <!-- end of .container -->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/logo-n.png" height="45" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{route('participan.index')}}">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('participan.journey')}}">Journey</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('participan.teaching')}}">Teaching</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('participan.about')}}">About</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="">My Account</a></li>              
           </ul>
            <!-- <div class="dropdown d-none d-lg-block">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div> -->
          </div>
        </div>
      </nav>
      <section class="pt-2 bg-600" id="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/Brilliant_index.png" width="470" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <!-- <h4 class="fw-bold font-sans-serif">De BoLu</h4>-->
              <h1 class="fs-6 fs-xl-7 mb-1">BriLLiAnt</h1>
              <h1 class="fs-6 fs-xl-3 mb-3">(Brilliant Al-Qur'an Learning Assistant)</h1>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" style="margin-top:-5.8rem"><header class="masthead">
          <div class="container position-relative">
              <div class="row justify-content-center">
                  <div class="col-xl-6">
                      <div class="text-center text-white">
                          <h1 class="mb-5">"Ilmu adalah kehidupan bagi pikiran"</h1>
                          <h1 class="mb-5">(Abu Bakar)</h1>
                          <div class="btn btn-primary btn-lg">
                              <a href="{{route('student.test')}}" style="color: white;">Pretest Now</a></li>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row">
            <h1 class="text-center mb-5"> BriLLiAnt Featured Courses</h1>
            <div class="col-md-6 mb-6">
              <div class="card h-400"><img class="card-img-top w-400" src="assets/img/gallery/arabic.jpg" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Automatic Quranic Arabic</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-6">
              <div class="card h-400"><img class="card-img-top w-400" src="assets/img/gallery/automatic.png" alt="courses" />
                <div class="card-body">
                  <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">Speech Matching</h5><a class="text-muted fs--1 stretched-link text-decoration-none" href="#!">The Museum of Modern Art</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-0">

        <div class="container">
          <div class="row h-100 align-items-center">
            <h1 class="text-center mb-5">Introduction BriLLiAnt Team</h1>
            <div class="col-md-12 col-lg-6 h-100">
              <div class="card card-span text-white h-100"><img class="w-100" src="assets/img/gallery/Brilliant_index.png" alt="..." />
                <div class="card-body px-xl-5 px-md-3 pt-0">
                  <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                    <h5 class="mt-3 mb-0">BriLLiAnt</h5>
                    <p class="text-muted">(Brilliant Al-Qur'an Learning Assistant)</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 h-100">
              <h1 class="my-4">Brilliant Al-Qur'an<br /><span class="text-primary">Learning Asistant</span></h1>
              <p>Online learn Quraan is the best online website for Quran learning within the guidance of best Quran scholars. Anybody can enjoy the customized learning without any age or race barriers. We offer guaranteed results. Our priorities are reliability, customer satisfaction and Islamic education.</p>
            </div>
          </div>
        </div>
        <section class="testimonials text-center bg-light">
          <div class="container">
              <h2 class="mb-5">Brilliant Team</h2>
              <div class="row">
                  <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                          <img class="img-fluid rounded-circle mb-3" src="assets/img/gallery/risa.jpg" alt="..." />
                          <h5>Risa Riski A.</h5>
                          <p class="font-weight-light mb-0">-19102079-</p>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                          <img class="img-fluid rounded-circle mb-3" src="assets/img/gallery/AS.jpg" alt="..." />
                          <h5>Asti Dwi S.</h5>
                          <p class="font-weight-light mb-0">-19102006-</p>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                          <img class="img-fluid rounded-circle mb-3" src="assets/img/gallery/bas.JPG" alt="..." />
                          <h5>Bastian Armananta P.</h5>
                          <p class="font-weight-light mb-0">-19102262-</p>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder" style="background-image:url(assets/img/gallery/funfacts-2-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/published.png" height="100" alt="..." />
              <h1 class="my-2">768</h1>
              <p class="text-info fw-bold">COURSES PUBLISHED</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/instructors.png" height="100" alt="..." />
              <h1 class="my-2">120</h1>
              <p class="text-info fw-bold">EXPERT INSTRUCTORS</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/learners.png" height="100" alt="..." />
              <h1 class="my-2">8300</h1>
              <p class="text-info fw-bold">HAPPY LEARNERS</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5"><img src="assets/img/gallery/awards.png" height="100" alt="..." />
              <h1 class="my-2">32</h1>
              <p class="text-info fw-bold">AWARDS ACHIEVED</p>
            </div>
          </div>
        </div>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0" style="margin-top: -5.8rem;">
        <div class="container bg-primary">
          <div class="row justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold">All rights Reserved</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end"> &copy; Brilliant Company, 2022</a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>