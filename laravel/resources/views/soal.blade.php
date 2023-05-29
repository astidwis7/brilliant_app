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
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{route('participan.account')}}">My Account</a></li>
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
      <section class="py-0" style="margin-top:-5.8rem"><header class="masthead">
          <div class="container position-relative">
              <div class="row justify-content-center">
                  <div class="col-xl-6">
                      <div class="text-center text-white">
                          <h1 class="mb-5">Strive For Progress Not Perfection</h1>
                          <h1 class="mb-5">GOOD LUCK!</h1>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      </section>

        <!--BISMILLAH -->
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            <section class="features-icons bg-light text-center" id="path">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            @csrf
                            <div class="form-group">
                                <label for="username"> Ada berapakah huruf hijaiyah yang mempunyai titik?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_1"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">15
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_1"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">14
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_1"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">13
                                </label>
                                </div>
                                @error('jawaban_1')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                           
                            <div class="form-group">
                            <label for="username">Di antara huruf ر، و، م، ن  huruf manakah yang bisa disambung baik sebelum atau sesudah?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_2"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">و dan  م
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_2"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">م dan  ن

                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_2"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">ر dan  و 
                                </label>
                                </div>
                                @error('jawaban_2')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                           
                            <div class="form-group">
                            <label for="username">Dalam Al Quran ada tanda baca yang ditulis 2 kali, tanda baca tersebut disebut?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_3"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Tanwin
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_3"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Fathah
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_3"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Kasrah
                                </label>
                                </div>
                                @error('jawaban_3')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- LAILAHAILLALLAH -->
        <!-- SOOAL 4-6 -->
            <section class="features-icons bg-light text-center" id="path">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="form-group">
                            <label for="username">Manakah yang merupaka huruf qolqolah?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_4"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">ب، ج، د، ك، م، ر
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_4"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">ب، ج، د، ل، م، ر
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_4"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">ب، ج، د، ط، ق
                                </label>
                                </div>
                                @error('jawaban_4')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                           
                            <div class="form-group">
                            <label for="username">Huruf idzhar merupakan huruf yang keluar dari tenggorokan, disebut apakah makhorijul huruf tersebut ?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_5"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Al Halq
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_5"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Al Jauf
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_5"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Al Lisan
                                </label>
                                </div>
                                @error('jawaban_5')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                           
                            
                            <div class="form-group">
                            <label for="username">Apakah yang disebut dengan lam jalalah ?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_6"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Lafadz  رyang didahului huruf berharakat fathah atau dhommah
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_6"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Lafadz  رyang didahului huruf berharakat kasrah
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_6"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Lafadz  اللّهyang didahului huruf berharakat fathah atau dhommah

                                </label>
                                </div>
                                @error('jawaban_6')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- SOAL7-9 -->
            <section class="features-icons bg-light text-center" id="path">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            
                            <div class="form-group">
                            <label for="username">Manakah yang bukan merupakan ayat saktah dalam Al Quran?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_7"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Yusuf ayat 11
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_7"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Al Kahfi ayat 1-2
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_7"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Yaasiin ayat 52
                                </label>
                                </div>
                                @error('jawaban_7')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                           
                            
                            <div class="form-group">
                            <label for="username">Apakah yang dimaksud dengan ghoribul Quran ?
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_8"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Bacaan mudah dalam Al Quran
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_8"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Bacaan asing dalam Al Quran
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_8"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Bacaan sulit dalam Al Quran
                                </label>
                                </div>
                                @error('jawaban_8')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            
                            
                            <div class="form-group">
                            <label for="username">Surat ke 49 yang memiliki arti kamar - kamar adalah
                                </label>
                                <div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_9"
                                        id="laki_laki" value="a"
                                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Az zumar
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_9"
                                        id="perempuan" value="b"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Adz dzaariat
                                </label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jawaban_9"
                                        id="perempuan" value="c"
                                        {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Al hujurot
                                </label>
                                </div>
                                @error('jawaban_9')
                                <div class="text-danger">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <button type="submit" class="btn btn-primary mb-2">Submit
            </button>
            </section>

          </form>
        



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