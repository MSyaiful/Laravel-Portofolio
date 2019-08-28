<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Tag</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tambahtag') }}" method="POST">
                            @csrf
                            <div>
                                <label>New Tag</label>
                                <input type="text" name="nama_tag" class="form-control">
                            </div>
                            <a href="{{url('menuartikel')}}" style="margin-top:20px;"
                                    class="btn btn-danger">Back</a>
                            <button class="btn btn-primary mt-3" value="Simpan">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
