<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    


    <link rel="stylesheet" href="{{asset('css/app.css')}}">    
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
		
</head>
<body>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="">Pilih gambar</label><br>
            <input type="file" name="file" >
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control description" id="exampleFormControlTextarea1" rows="3" name="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Category</label><br>
            <select name="id_ktg" style="padding: 8px 100px;">
            <option value="">Pilih Kategori</option>
            @foreach($kate as $d)
                <option value="{{$d->id}}">{{$d->nama}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label>Tag</label><br>
            <select class="form-control js-example-basic-multiple" name="tag[]" multiple="multiple">
            @foreach($tag as $t)
                <option value="{{$t->id}}">{{$t->judul_tag}}</option>
            @endforeach
            </select>
            <!-- <div class="form-group">
            <label for="formGroupExampleInput">Author</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Author" name="author">
            </div> -->
            <button class="btn btn-success">Simpan</button>
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