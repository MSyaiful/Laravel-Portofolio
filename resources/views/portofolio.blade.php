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
        <div class="jumbotron p-3 p-md-2 text-white rounded" style="background: url({{asset('image/bg-porto3.jpg')}}); background-repeat:no-repeat; background-size:100%; height:600px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-0" style="color:black; margin-top:300px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="display-4"><b>About </b>Me</p>
                    <p style="text-align: justify;">Saya Muhammad Syaiful Iskandar Lahir di Jakarta, 12 Juni 2002. Saya
                        Sekarang Berusia 16 Tahun. Saya Adalah Anak Pertama Dari 3 bersaudara. Dikeluarga Saya Terdiri
                        Dari Ayah, Ibu, Adik Perempuan, Adik Laki - Laki, dan Saya Sendiri.</p>
                    <p style="text-align: justify;">Saya Sekarang Tinggal di Kp. Bojong Rt-02 Rw-26 Kelurahan Baktijaya
                        Kecamatan Sukmajaya Depok, Jawa Barat. Kehidupan Sehari - hari Saya Adalah Bersekolah, Bermain
                        Game, Mengerjakan Tugas, Membantu Orangtua, dan Lain - lain.</p>
                </div>
                <div class="col-md-3 mt-5">
                    <img src="{{asset('image/aboutme2.jpg')}}" width="100%">
                </div>
            </div>
            <hr class="my-5 bg-primary">
        </div>

        <div class="container mb-5">
            <p class="display-4 ml-5" style="text-align: center;"><b>Pendidikan</b></p>
            <div class="row justify-content-center text-center">
                <div class="col-5 mb-5">
                    <img src="{{asset('image/logotk.jpg')}}" width="50%">
                    <div><button class="btn btn-info mt-3" data-toggle="collapse" data-target="#isitk">More</button>
                        <div id="isitk" class="collapse in mt-3" style="text-align: justify;">TK Kurnia adalah tempat
                            pertama saya belajar pendidikan. Saya belajar di TK Kurnia selama 1 tahun lamanya. Saat
                            belajar disana saya memiliki banyak kenangan masa kecil, seperti menangis saat saya
                            ditinggalkan oleh orang tua saya untuk pulang.</div>
                    </div>
                </div>
                <div class="col-5 mb-5">
                    <img src="{{asset('image/logotut.jpg')}}" width="50%">
                    <div><button class="btn btn-info mt-3" data-toggle="collapse" data-target="#isitut">More</button>
                        <div id="isitut" class="collapse in mt-3" style="text-align: justify;">SDN Bakti Jaya 3 adalah
                            tempat kedua saya belajar pendidikan. Saya belajar di SDN Bakti Jaya 3 selama 6 tahun
                            lamanya. Saat saya bersekolah di SDN Bakti Jaya 3 saya mendapatkan teman baru dan bertemu
                            dengan teman TK. SDN Bakti Jaya 3 terletak di Jl. Rasamala Raya, Bakti Jaya, Sukmajaya,
                            Kota Depok, Jawa Barat 16418</div>
                    </div>
                </div>
                <div class="col-5 mt-5">
                    <img src="{{asset('image/logosmp.jpg')}}" width="50%">
                    <div><button class="btn btn-info mt-3" data-toggle="collapse" data-target="#isismp">More</button>
                        <div id="isismp" class="collapse in mt-3" style="text-align: justify;">SMPN 04 Depok adalah
                            tempat ketiga saya belajar pendidikan. Saya belajar di SMPN 04 Depok selama 3 tahun tetapi
                            waktu yang saya habiskan berlalu dengan cepat. Di SMPN 04 Depok saya juga bertemu dengan
                            teman dari SD. SMPN 04 depok terletak di Jalan Merdeka Raya Depok II Tengah, Mekar Jaya,
                            Sukmajaya, Mekar Jaya, Sukmajaya, Kota Depok, Jawa Barat 16411</div>
                    </div>
                </div>
                <div class="col-5 mt-5">
                    <img src="{{asset('image/starbhak.png')}}" width="50%">
                    <div><button class="btn btn-info mt-3" data-toggle="collapse" data-target="#isitb">More</button>
                        <div id="isitb" class="collapse in mt-3" style="text-align: justify;">SMK Taruna Bhakti adalah
                            tempat keempat saya belajar pendidikan. Sudah hampir 2 tahun saya belajar di SMK Taruna
                            Bhakti. Di SMK Taruna Bhakti saya juga bertemu dengan teman SD. SMK Taruna Bhakti terletak
                            di Jl. Taruna Bhakti, Curug, Cimanggis, Kota Depok, Jawa Barat 16453</div>
                    </div>
                </div>
            </div>
            <hr class="my-5 bg-primary">
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <p class="display-4"><b>Hobi</b></p>
                    <p style="text-align: left;">1. Bermain Game</p>
                    <p style="text-align: left;">2. Nonton Anime</p>
                    <p style="text-align: left;">3. Membaca Komik</p>
                    <p style="text-align: left;">4. Lari Santai</p>
                </div>
                <div class="col-4">
                    <p class="display-4"><b>Makanan</b> Kesukaan</p>
                    <p style="text-align: left;">1. Nasi Goreng</p>
                    <p style="text-align: left;">2. Rendang</p>
                    <p style="text-align: left;">3. Sate Ayam</p>
                    <p style="text-align: left;">4. Sayur Kangkung</p>
                </div>
                <div class="col-3">
                    <p class="display-4"><b>Warna</b> Kesukaan</p>
                    <p style="text-align: left;">1. Merah</p>
                    <p style="text-align: left;">2. Hitam</p>
                    <p style="text-align: left;">3. Putih</p>
                </div>
            </div>
            <hr class="my-5 bg-primary">
        </div>

        <p class="display-4 ml-5" style="text-align: center;"><b>Skill</b></p>
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div align="center" class="card justify-content-center" style="min-height: 250px;">
                                <div class="card-body">
                                    <img class="mb-3" src="{{asset('image/php.png')}}" style="width: 100%;">
                                    <p>PHP</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning text-seccondary" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div align="center" class="card justify-content-center" style="min-height: 250px;">
                                <div class="card-body">
                                    <img src="{{asset('image/html.png')}}" style="width: 60%;">
                                    <p>HTML</p>
                                    <div class="progress">
                                        <div class="progress-bar text-dark" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div align="center" class="card justify-content-center" style="min-height: 250px;">
                                <div class="card-body">
                                    <img src="{{asset('image/js.png')}}" style="width: 60%;">
                                    <p>Java Script</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 55%;"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-12">
                            <div align="center" class="card justify-content-center mt-2" style="min-height: 250px;">
                                <div class="card-body">
                                    <img src="{{asset('image/css.png')}}" style="width: 60%;">
                                    <p>CSS</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 55%;"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div align="center" class="card justify-content-center mt-2" style="min-height: 250px;">
                                <div class="card-body">
                                    <img src="{{asset('image/java.png')}}" style="width: 60%;">
                                    <p>Java</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: 40%;"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

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
