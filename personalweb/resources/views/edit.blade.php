<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">    
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
    
    <div class="card" style="padding-left: 20px; padding-bottom: 10px;">
        <div class="card-body">
            <form action="{{ route('edit.simpan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <label for="formGroupExampleInput">Gambar Lama:</label>
            <img src="{{ url('gambar/'.$data->file) }}" style="width: 200px; height: 150px;">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">File:</label><br>
            <input type="file" name="file">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control col-md-10" id="formGroupExampleInput" name="judul"
            value="{{ $data->judul }}">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control description" id="exampleFormControlTextarea1" rows="4" name="content">{!!$data->content!!}</textarea>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Category</label><br>
            <select name="id_ktg" style="padding: 8px 100px;">
            @foreach($kate as $d)
                <option value="{{$d->id}}">{{$d->nama}}</option>
            @endforeach
            </select>
            </div>
            <label>Tag</label>
            <select class="form-control js-example-basic-multiple" name="tag[]" multiple="multiple">
            @foreach($tag as $t)
                <option value="{{$t->id}}">{{$t->judul_tag}}</option>
            @endforeach
            </select>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Author</label>
            <textarea disabled class="form-control col-md-10" id="exampleFormControlTextarea1" rows="1" name="author">{{$data->author}}</textarea>
            </div>
            <button class="btn btn-success col-md-1">Simpan</button>
            </form>
        </div>
    </div>

</body>
<script>$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});</script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    width: 900,
    height: 300
});
</script>
</html>