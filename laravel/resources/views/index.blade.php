<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Brilliant</title>
        <link rel="icon" type="image/x-icon" href="assets/img/B.jpg" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="">Brilliant</a>
            </div>
        </nav>
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">"Ilmu adalah kehidupan bagi pikiran"</h1>
                            <h1 class="mb-5">(Abu Bakar)</h1>
                            <div class="btn btn-primary btn-lg">
                                <a href="{{route('login.index')}}" style="color: white;">Sign In</a></li>
                            </div>
                            <div class="btn btn-primary btn-lg">
                                <a href="{{route('participan.create_')}}" style="color: white;">Sign Up</a></li>
                            </div>  
                            <!-- <div class="btn btn-primary btn-lg">
                                <a href="{{route('login.index')}}" style="color: white;">Admin</a></li>
                            
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="features-icons bg-light text-center" id="path">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/pemula-fix.jpg">
                            <h3><a href="#pemula">AL-MUBTADIIN</a></h3>
                            <p class="lead mb-0">Kelas pemula belajar Al-Qur'an pada Brilliant Journey</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/menengah.jpg">
                            <h3><a href="#menengah">AL-MUTAWASITIN</a></h3>
                            <p class="lead mb-0">Kelas menengah belajar Al-Qur'an pada Brilliant Journey</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/pemula.jpg">
                            <h3><a href="#mahir">AL-MUTAQADIMIN</a></h3>
                            <p class="lead mb-0">Kelas mahir belajar Al-Qur'an pada Brilliant Journey</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0" id="pemula">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/pemula-fix.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>AL-MUBTADIIN</h2>
                        <p class="lead mb-0">Tingkat pemula akan di ajarkan dasar-dasar membaca Al-Qur'an seperti pengenalan huruf, membedakan panjang pendek, gunnah dan lainnya.</p>
                    </div>
                </div>
                <div class="row g-0" id="menengah">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/menengah.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2 class="text-black">AL-MUTAWASITIN</h2>
                        <p class="lead mb-0">Tingkat menengah akan di ajarkan cara membaca Al-Qur'an sesuai dengan tuntunan dan tajwid yang benar.</p>
                    </div>
                </div>
                <div class="row g-0" id="mahir">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/pemula.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>AL-MUTAQADIMIN</h2>
                        <p class="lead mb-0">Tingkat mahir akan di ajarkan menghafal Al-Qur'an dan memahami tafsirnya.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Brilliant 2022</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
