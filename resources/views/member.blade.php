@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Member</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table">

                    <tr class="bg-info">
                        <th>ID</th>
                        <th>Nama Member</th>
                        <th>Jenis Member</th>
                        <th>Dibuat</th>
                        <th>Email</th>
                        <td>Modify<a class="btn btn-light" style="margin-left:25px;"
                                href="{{ url('tambahmember') }}">Tambah</a></td>
                    </tr>
                    @foreach($mem as $member)
                    <tr class="bg-light">
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->nama_member }}</td>
                        <td>{{ $member->jenis_member }}</td>
                        <td>{{ date("d F Y",strtotime($member->created_at)) }}</td>
                        <td>{{ $member->email }}</td>
                        <td><a class="btn btn-info" href="{{ route('member.change', $member->id) }}">Edit</a><a
                                class="btn btn-danger" href="{{ route('member.delete',$member->id) }}"
                                style="margin-left:25px;">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-6 mt-3">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Jenis Member</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Golden</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Platinum</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Ruby</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
