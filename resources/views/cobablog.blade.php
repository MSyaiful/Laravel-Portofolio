@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/darkly.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-3 text-center">
                    <a class="blog-header-logo text-dark" href="cobablog">Home</a>
                </div>
                <div class="col-3 text-center">
                    <a class="blog-header-logo text-dark" href="beranda">Profile</a>
                </div>
                <div class="col-3 text-center">
                    <a class="blog-header-logo text-dark" href="portofolio">Portofolio</a>
                </div>
                <div class="col-3 text-center">
                    <a class="blog-header-logo text-dark" href="artikel">Artikel</a>
                </div>
            </div>
        </header>
        <hr>

        <!-- Header -->
        <div class="jumbotron p-3 p-md-2 text-white rounded" style="background: url({{asset('image/blank.jpg')}}); background-repeat:no-repeat; background-size:100%; height:600px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-0" style="color:black; margin-top:300px;">
                        <h1 class="display-4 font-italic">Welcome To My Blog</h1>
                        <p class="lead my-3">Saya adalah seorang programmer Pemula dan ini adalah web yang saya buat
                            untuk diri saya sendiri. Semoga anda menikmati web yang saya buat "-"</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <section class="content-section" id="portfolio">
            <div class="container mb-5">
                <div class="content-section-heading text-center">
                    <h1 class="mb-2">Bahasa Pemrograman</h1>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>HTML</h2>
                                    <p class="mb-0">HTML adalah sebuah bahasa markah yang digunakan untuk membuat
                                        sebuah halaman web yang ditulis dalam berkas
                                        format ASCII agar dapat menghasilkan tampilan wujud yang terintegerasi.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/pex1.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>CSS</h2>
                                    <p class="mb-0">CSS adalah salah satu bahasa desain web
                                        yang mengontrol format tampilan sebuah halaman web yang
                                        ditulis dengan menggunakan penanda markup laguage.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/pex2.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>PHP</h2>
                                    <p class="mb-0">PHP adalah singkatan dari "Hypertext Prepocessor", yaitu
                                        bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan
                                        pengembangan sebuah situs web dan bisa digunakan bersamaan dengan HTML.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/pex3.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Java Script</h2>
                                    <p class="mb-0">JavaScript adalah bahasa pemrograman web yang bersifat Client Side
                                        Programming Language. Client Side Programming Language adalah tipe bahasa
                                        pemrograman yang pemrosesannya dilakukan oleh client. </p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/pex4.jpeg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
        </section>

        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">What I'am Offer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <i class="service-icon rounded-circle mx-auto mb-3">
                            <i class="fas fa-mobile"></i>
                        </i>
                        <h4>
                            <strong>Responsive</strong>
                        </h4>
                        <p class="text-faded mb-0">Looks great on any screen size!</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <i class="service-icon rounded-circle mx-auto mb-3">
                            <i class="fas fa-pen-square"></i>
                        </i>
                        <h4>
                            <strong>Redesigned</strong>
                        </h4>
                        <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <i class="service-icon rounded-circle mx-auto mb-3">
                            <i class="fas fa-thumbs-up"></i>
                        </i>
                        <h4>
                            <strong>Favorited</strong>
                        </h4>
                        <p class="text-faded mb-0">Millions of users
                            <i class="fas fa-heart"></i>
                            Start Bootstrap!</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <i class="service-icon rounded-circle mx-auto mb-3">
                            <i class="fas fa-question"></i>
                        </i>
                        <h4>
                            <strong>Question</strong>
                        </h4>
                        <p class="text-faded mb-0">Do you have a question...???</p>
                    </div>
                </div>
            </div>
        </section>


        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

    </main><!-- /.container -->

    <!-- Footer -->
    <footer class="blog-footer">
        <p>
            <a href="#">Back to top</a>
        </p>
        <p style="color:black">Copyright &copy;MSyaiful</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
