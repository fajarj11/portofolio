<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nama Member</th>
                            <th>Jenis Membership</th>
                            <th>Tanggal Daftar</th>
                            <th>Email</th>
                        </tr>
                        @foreach($membership as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->nama_member }}</td>
                            <td>{{ $d->id_jenis }}</td>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->email }}</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5">
        <div class="card-body">
            <h4>Keterangan Jenis Membership</h4>
            <ol>
                <li>Premium</li>
                <li>Free</li>
            </ol>
        </div>
    </div>
    </div>

</body>
</html>