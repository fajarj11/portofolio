<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <div class="card" style="padding-left: 20px; padding-bottom: 10px;">
        <div class="card-body">
            <form action="{{ route('edit_gallery_simpan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$gallery->id}}">
            <label for="formGroupExampleInput">Gambar Lama:</label>
            <img src="{{ url('gallery/'.$gallery->file) }}" style="width: 150px; height: 150px;">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">File:</label><br>
            <input type="file" name="file">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <input type="text" class="form-control col-md-10" id="formGroupExampleInput" name="deskripsi"
            value="{{ $gallery->deskripsi }}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Author</label>
            <textarea disabled class="form-control col-md-10" id="exampleFormControlTextarea1" rows="1" name="author">{{$gallery->author}}</textarea>
            </div>
            <button class="btn btn-success col-md-1">Simpan</button>
            </form>
        </div>
    </div>

</body>
</html>