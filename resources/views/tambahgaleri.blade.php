<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Posting Image</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('galeri.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control p-1">
                            </div>
                            <div class="form-grup">
                                <input type="hidden" name="author" value="{{Auth::user()->name}}" class="form-control">
                            </div>
                            <div>
                                <a href="{{url('menugaleri')}}" style="margin-top:20px;" class="btn btn-danger">Back</a>
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
