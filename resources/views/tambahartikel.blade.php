<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Posting Artikel</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('artikel.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="form-grup">
                                <label>Judul</label>
                                <input type="text" name="judul" value="" class="form-control">
                            </div>
                            <div class="form-grup">
                                <label>Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    @foreach($kate as $e)
                                    <option value="{{ $e->id }}">{{ $e->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-grup">
                                <label>Tag</label>
                                <select name="tag[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                    @foreach($tag as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama_tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-grup">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" rows="4" class="form-control description"></textarea>
                            </div>
                            <div class="form-grup">
                                <input type="hidden" name="author" value="{{Auth::user()->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="foto" class="form-control p-1">
                            </div>
                            <div>
                                <a href="{{url('menuartikel')}}" style="margin-top:20px;"
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

<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });

</script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea.description',
        width: 700,
        height: 300
    });

</script>

</html>
