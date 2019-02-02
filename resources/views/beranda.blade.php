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
        </hr>

        <!-- Header -->
        <div class="jumbotron p-3 p-md-5 text-white rounded" style="background-color:#c0dee6">
            <div class="row">
                <div class="col-md-7 px-0">
                    <img class="rounded" src="{{asset('image/profile.jpg')}}" alt="" width="300px" height="250px">
                </div>
                <div class="col-md-5 px-0" style="color:black;">
                    <h2 class="display-5 font-italic">Muhammad Syaiful Iskandar</h2>
                    <p class="lead my-3">Seorang programmer pemula yang bergerak dibidang web dan android.</p>
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
