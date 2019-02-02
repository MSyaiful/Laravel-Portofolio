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
        <div class="jumbotron p-3 p-md-2 text-white rounded" style="background: url({{asset('image/bg-artikel.jpg')}}); background-repeat:no-repeat; background-size:100%; height:600px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-0" style="color:black; margin-top:300px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <section class="content-section" id="portfolio">
            <div class="container mb-5">
                <div class="content-section-heading text-center">
                    <h1 class="mb-2">Artikel</h1>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Technology</h2>
                                    <p class="mb-0">Pada 2018 lalu tercatat sebanyak 1.4 miliar smartphone dipasarkan
                                        secara global. Samsung dan Apple tercatat masih berada didua teratas sebagai
                                        vendor smartphone terbesar didunia.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/artikel1.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Sports</h2>
                                    <p class="mb-0">Marouane Fellaini mengakhiri kariernya di Manchester United.
                                        Gelandang Belgia itu resmi gabung ke klub China Shandong Luneng. Kabarnya MU
                                        melepas Fellaini ke Shandong dengan banderol 10 juta pound sterling.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/artikel2.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>Cataclysm</h2>
                                    <p class="mb-0"> Banjir masih menggenangi sejumlah kecamatan di Kebumen, Jawa
                                        Tengah, Kamis (17/1/2019). Bahkan Kecamatan Puring, Dusun Bulusan, Desa
                                        Madurejo, Padahal dusun ini merupakan permukiman padat penduduk. Banjir telah
                                        mengisolasi
                                        dan memutus akses jalan dusun.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/artikel3.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item">
                            <span class="caption">
                                <span class="caption-content">
                                    <h2>World New's</h2>
                                    <p class="mb-0">Setidaknya 15 kuburan massal telah ditemukan di bagian barat laut
                                        Republik Demokratik Kongo setelah tiga hari pertumpahan darah antar etnis pada
                                        bulan Desember lalu. Demikian pernyataan juru bicara misi PBB di Kongo,
                                        MONUSCO.</p>
                                </span>
                            </span>
                            <img class="img-fluid" src="{{asset('image/artikel4.jpeg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
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
