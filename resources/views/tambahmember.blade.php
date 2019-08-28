<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Member</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('member.save') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="form-grup">
                                <label>Nama Member</label>
                                <input type="text" name="nama_member" value="" class="form-control">
                            </div>
                            <div class="form-grup">
                                <label>Jenis Member</label>
                                <select name="jenis_member" class="form-control">
                                    @foreach($jenis as $e)
                                    <option value="{{ $e->id }}">{{ $e->jenis_member }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-grup">
                                <label>Email</label>
                                <input type="text" name="email" value="" class="form-control">
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
