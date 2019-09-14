<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="{{ route('tambah_tag') }}" method="POST">
			@csrf
				<div>
					<label>New Tag</label>
					<input type="text" name="judul_tag" class="form-control">
				</div>
				<button class="btn btn-success mt-3">Tambah</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>