<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
<div class="card">
<div class="card-body">
<form action="{{ route('tbh_komen') }}" method="POST">
@csrf
<h2>Tinggalkan Komentar Anda</h2>
<div class="form-group">
<label for="formGroupExampleInput">Nama</label>
<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama">
</div>
<div class="form-group">
<label for="exampleFormControlTextarea1">Komentar</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar" placeholder="Komentar"></textarea>
</div>
<button class="btn btn-success">Simpan</button>
</div>
</div>

</body>
</html>