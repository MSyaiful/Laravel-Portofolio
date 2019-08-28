@extends('layouts.app')

@section('content')


<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                @foreach($tit as $e)
                <h3 class="mt-4">{{ $e->nama }}</h3>
                @endforeach
                @foreach($kate as $d)
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $d->judul }}</h4>
                        <pre>{{str_limit ($d->deskripsi),50 }}</pre>
                        <small>{{$d->author}}</small><br>
                        <a href="{{ route('get.art', $d->id) }}">Read More</a>
                    </div>
                </div>
                @endforeach
                <a class="btn btn-primary mt-3" href="{{ url('/artikel') }}">Back</a>
            </div>
        </div>
    </div>
</div>


@endsection
