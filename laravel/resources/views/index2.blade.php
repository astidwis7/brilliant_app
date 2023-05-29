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
               <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">brilliant@outlook.com </a></p>
             </div>
           </div>
         </div> 
        <!-- end of .container-->

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
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="">My Profile</a></li>
           </ul>
            <div class="dropdown d-none d-lg-block">
              <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </ul>
            </div>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->

        <section class="pt-2 bg-600" id="home">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-5 col-lg-6 order-0 order-md-4 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/automatic.png" width="470" alt="hero-header" /></div>
              <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <!-- <h4 class="fw-bold font-sans-serif">De BoLu</h4>-->
                <h6 class="font-sans-serif text-primary fw-bold">BriLLiAnt Teaching</h6> 
                <h1 class="mb-6">Speech Matching</h1>
                  <form class="row g-1">
                    <div class="col-sm-2 col-md-9">
                      <!-- <label class="form-label" for="inputCategories">Categories</label> -->
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Speech Correction</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>
                    <div class="col-auto z-index-12">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    <div class="col-sm-6 col-md-9">
                      <label class="form-label" for="inputLevel">Hasil</label>
                      <div class="form-floating">
                        <textarea class="form-control" ></textarea>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="pb-11 pt-4 bg-600">

              <section class="pt-2 bg-600" id="home">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-4 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/arabic.jpg" width="470" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                      <!-- <h4 class="fw-bold font-sans-serif">De BoLu</h4>-->
                      <h6 class="font-sans-serif text-primary fw-bold">BriLLiAnt Teaching</h6> 
                      <h1 class="mb-6">Automatic Quran Arabic</h1>
                        <form class="row g-1">
                          <div class="col-sm-2 col-md-9">
                            <!-- <label class="form-label" for="inputCategories">Categories</label> -->
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Generate</label>
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>
                          <div class="col-auto z-index-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div><br>
                          <div class="col-sm-6 col-md-9">
                            <label class="form-label" for="inputLevel">Hasil</label>
                            <div class="form-floating">
                              <textarea class="form-control" ></textarea>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  

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