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
            <form action="{{ route('tambah_gallery') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="">Pilih gambar</label><br>
            <input type="file" name="file" >
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Deskripsi" name="deskripsi">
            </div>
            <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

</body>
</html>