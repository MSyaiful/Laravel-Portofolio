<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curd Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('blog.update') }}" method="POST">
					@csrf
					<input type="hidden" name="id" value="{{$blog->id}}">
					<div class="form-grup">
						<label>Judul</label>
						<input type="text" name="judul" value="{{$blog->judul}}" class="form-control">
					</div>
					<div class="form-grup">
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" value="{{$blog->deskripsi}}" class="form-control">
					</div>
					<div>
						<input type="submit" name="button" value="Simpan" class="btn btn-primary">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>