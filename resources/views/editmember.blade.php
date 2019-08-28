<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit Member</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('member.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$mem->id}}">
                            <div class="form-grup">
                                <label>Nama Member</label>
                                <input type="text" name="nama_member" value="{{$mem->nama_member}}"
                                    class="form-control">
                            </div>
                            <div class="form-grup">
                                <label>Jenis Member</label>
                                <select name="jenis_member" class="form-control">
                                    @foreach($jnsmember as $e)
                                    <option value="{{ $e->id }}">{{ $e->jenis_member }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-grup">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$mem->email}}" class="form-control">
                            </div>
                            <div>
                                <a href="{{url('member')}}" style="margin-top:20px;"
                                    class="btn btn-danger">Back</a>
                                <input type="submit" name="button" value="Simpan" style="margin-top:20px;"
                                    class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
