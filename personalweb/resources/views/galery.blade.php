<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Post</title>
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="gambar/profile.jpg">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    @guest
        @if (Route::has('register'))
            <body class="bg-danger">
            <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/icon.jpg" alt="IMG" style="margin-top: -100px;">
				</div>

				<span class="login100-form validate-form">
					<h1 class="login100-form-title" style="margin-top: -60px;">
						Please Login For Make a Gallery
					</h1>
                    <div class="btn btn-success" style="margin-left: 113px;"><a href="{{ url('login') }}" class="text-white">Login</a></div>
				</span>
                
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

    =================================================================-->
	<script src="js/main.js"></script>
            </body>
        @endif
    @else
    
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <table id="mytable" class="table table-responsive text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Updated At</th>
                            <th class="text-center">Modify</th>

                            <!-- ini untuk server side data tables -->
                            <!-- <th class="text-center">Edit</th> -->
                            <!-- <th class="text-center">Delete</th> -->
                            
                        </tr>
                    </thead>
                        @foreach($gallery as $g)
                        @if(Auth::user()->name == $g->author)
                        <tr>
                            <td><img src="{{ url('gallery/'.$g->file) }}" style="width: 50px;"></td>
                            <td class="text-center">{{ $g->deskripsi }}</td>
                            <td class="text-center">{{ $g->author }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($g->created_at)) }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($g->updated_at)) }}</td>
                            <td>
                            <a class="btn btn-primary" href="{{ route('edit_gallery', $g->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('del_gallery', $g->id) }}" >Delete</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    </div>
                </div>
                <a class= "btn btn-dark mt-3" href="tambah_gallery">Create Album</a>
                <a class= "btn btn-success mt-3" href="/">Back To Home</a>
            </div>
        </div>
    </div>

        <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- ini untuk server side data tables -->
    <!-- App scripts -->
    <!-- @stack('scripts')
    @push('scripts')
    <script>
    $(function() {
    $('#mytable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'galery/json',
        columns: [
            { data: 'file', name: 'file' },
            { data: 'deskripsi', name: 'deskripsi' },
            { data: 'author', name: 'author' },
            { data: 'created_at', name: 'created_at' },
            { "data": "id",
                "searchable": false,
                "sortable": false,
                "render": function (id, type, full, meta) {
                return '<a href="/edit_gallery/'+id+'" class="btn btn-warning">Edit</a>';
                }, 
            },
            { "data": "id",
                "searchable": false,
                "sortable": false,
                "render": function (id, type, full, meta) {
                return '<a href="/del_gallery/'+id+'" class="btn btn-danger">Delete</a>';
                } 
            },
        ]
    });
    });
    </script> -->

    <script>
    $(document).ready(function(){
      $('#mytable').DataTable({
        'info' : false
      }
      );
    })
    
  </script>

</body>
</html>
@endguest