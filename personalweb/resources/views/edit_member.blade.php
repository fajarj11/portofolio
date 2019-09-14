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
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('edt.simpan') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
            <label for="formGroupExampleInput">Nama Member</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nama_member"
            value="{{ $data->nama_member }}">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Jenis Member</label><br>
            <select name="id_jenis" style="padding: 8px 100px;">
            @foreach($jnsmembership as $e)
                <option value="{{$e->id}}">{{$e->jenis}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Tanggal Daftar</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="tanggal" value="{{ $data->tanggal }}">
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="{{ $data->email }}">
            </div>
            <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

</body>
</html>