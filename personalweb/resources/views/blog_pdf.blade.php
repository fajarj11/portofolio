
<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <table border="1" cellspacing="0" id="myTable" class="table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Created Date</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($blog as $d)
                        <tr>
                            <td class="text-center"><img src="{{ url('gambar/'.$d->file) }}" style="width: 50px;"></td>
                            <td class="text-center">{{ $d->judul }}</td>
                            <td class="text-center">{!! str_limit($d->content, 30) !!}</td>
				            <td class="text-center">{{ $d->id_ktg }}</td>
                            <td class="text-center">{{ $d->author }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($d->created_at)) }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
</body>
</html>