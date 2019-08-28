@extends('layouts.app')

@section('content')

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

</head>
<main>
    <div class="container-fluid text-center">
        @csrf
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 pb-5">

            <!--Card image-->
            <div class="view view-cascade overlay wow fadeIn">
                <center><img src="{{ asset('uploadimg/'.$artikel->gambar) }}" alt="gambar" class="img-fluid"></center>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                <!--Title-->
                <h2 class="card-title"><strong>{{$artikel->judul}}</strong></h2>
                <h5 class="blue-text mb-5"><strong>{!! $artikel->deskripsi !!}</strong></h5>
                @foreach($artikel->tag as $d)
                <span class="text-light border bg-dark ml-1 p-1 rounded">{{ $d['nama_tag'] }}</span>
                @endforeach
                <br>
                <a class="btn btn-danger mt-3" href="{{ url('/artikel') }}">Back</a>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>
</main>

@guest
<div class="container mt-5">
    <div class="row">
        <div class="card col-8">
            <div class="card-body">
                <h3>Comment</h3>
                <form action="{{route('tbh_com')}}" method="POST" class="row">
                    @csrf
                    <input type="hidden" name="id_com" value="{{$artikel->id}}">
                    <div class="col-md-3 mb-2">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                        <textarea class="mt-3 description" name="comment" cols="80" rows="10" placeholder="Comment"></textarea>
                        <button class="btn btn-primary mt-3">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-body">
                    <h3>Recent Comment</h3>
                    <div class="container mt-4">
                        @foreach($artikel2 as $d)
                        <div class="row mb-3">
                            <div class="col-md-2 text-center border-right" style="margin-left: -20px;">
                                <!-- Nama Pengomentar -->
                                <img src="{{ asset('img/user.png') }}" class="rounded-circle" style="width: 50%;">
                                <p class="mt-1 border rounded">{{ $d->nama }}</p>
                            </div>
                            <div class="col-md-10 bg-primary rounded p-2">
                                <!-- Komentar -->
                                <p class="text-light">{!! $d->comment !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container mt-5">
        <div class="row">
            <div class="card col-8">
                <div class="card-body">
                    <h3>Comment</h3>
                    <form action="{{route('tbh_com')}}" method="POST" class="row">
                        @csrf
                        <input type="hidden" name="id_com" value="{{$artikel->id}}">
                        <div class="col-md-3 mb-2">
                            <input type="hidden" name="nama" class="form-control" value="{{Auth::user()->name}}">
                            <textarea class="mt-3 description" name="comment" cols="80" rows="10"
                                placeholder="Comment"></textarea>
                            <button class="btn btn-primary mt-3">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Recent Comment</h3>
                        <div class="container mt-4">
                            @foreach($artikel2 as $d)
                            <div class="row mb-3">
                                <div class="col-md-2 text-center border-right" style="margin-left: -20px;">
                                    <!-- Nama Pengomentar -->
                                    <img src="{{ asset('img/user.png') }}" class="rounded-circle" style="width: 50%;">
                                    <p class="mt-1 border rounded">{{ $d->nama }}</p>
                                </div>
                                <div class="col-md-10 bg-primary rounded p-2">
                                    <!-- Komentar -->
                                    <p class="text-light">{!! $d->comment !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

        <!-- Tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script>
            // SideNav Initialization
            $(".button-collapse").sideNav();

            new WOW().init();

        </script>

        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea.description',
                width: 700,
                height: 300
            });

        </script>




        @endsection
