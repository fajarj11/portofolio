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
			<form action="{{ route('tambah.kate') }}" method="POST">
			@csrf
				<div>
					<label>New Kategori</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<button class="btn btn-success mt-3">Tambah</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>