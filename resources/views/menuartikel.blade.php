@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{asset('css/dtble.css')}}">
    <title>Menu Artikel</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table mt-3" id="myTable">
                    <thead>
                        <tr class="bg-info">
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Author</th>
                            <th>Dibuat</th>
                            <th>Modify<a class="btn btn-light" style="margin-left:25px;"
                                    href="{{url('tambahartikel')}}">Tambah</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $artikel)
              
                        <tr class="bg-light">
                            <td>{{ $artikel->id }}</td>
                            <td><img src="{{ asset('uploadimg/'.$artikel->gambar) }}" style="width:150px; height:150px;"
                                    alt="gambar"></td>
                            <td>{{ $artikel->judul }}</td>
                            <td>{{ $artikel->id_kategori }}</td>
                            <td>{!! $artikel->deskripsi !!}</td>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ date("d F Y",strtotime($artikel->created_at)) }}</td>
                            <td><a class="btn btn-info" href="{{ route('artikel.change', $artikel->id) }}">Edit</a><a
                                    class="btn btn-danger" href="{{ route('artikel.delete',$artikel->id) }}"
                                    style="margin-left:25px;">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="container">
                <h3 class="mt4">Kategori</h3>
                <div class="card">
                    <div class="card-body">
                        <ul>
                            @foreach($kate as $e)
                            <li><a href="{{route('kate.tbh', $e->id)}}">{{$e->nama}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mt-4">Tag</h3>
                </div>
                <div class="col-md-6"><a class="btn btn-primary mt-4" style="margin-left: 400px; margin-bottom: 10px;"
                        href="tambahtag">Create Tag</a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul>
                        @foreach($tag as $t)
                        <li>{{ $t->nama_tag }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <script src="{{asset('js/dtble_jquery.js')}}"></script>
        <script src="{{asset('js/dtble_bootstrap.js')}}"></script>


        <script>
           $(document).ready(function(){
               $('#myTable').DataTable()
           })

        </script>

</body>

</html>
@endsection
