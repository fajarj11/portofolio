<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Post</title>
    
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
    <link rel="stylesheet" href="{{asset('css/dtbl.css')}}">

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
						Please Login For Make a Post
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

<!--===============================================================================================-->
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
                    <table id="myTable" class="table-responsive">
                        <thead>
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Updated At</th>
                            <th><a class= "btn btn-dark" href="tambah">Create Article</a></th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($blog as $d)
                        @if(Auth::user()->name == $d->author)
                        <tr>
                            <td class="text-center"><img src="{{ url('gambar/'.$d->file) }}" style="width: 50px;"></td>
                            <td class="text-center">{{ $d->judul }}</td>
                            <td class="text-center">{!! str_limit($d->content, 30) !!}</td>
				            <td class="text-center">{{ $d->id_ktg }}</td>
                            <td class="text-center">{{ $d->author }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($d->created_at)) }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($d->updated_at)) }}</td>
                            <td>
                            <a class="btn btn-primary" href="{{ route('edit', $d->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('del', $d->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <a class= "btn btn-success mt-3" href="/blog/export_excel">Export Data To Excel</a>
                <a class= "btn btn-success mt-3" href="/blog/cetak_pdf" target="_blank">Export Data To PDF</a><br>
                <a class= "btn btn-success mt-3" href="/">Back To Home</a>
                
                <div class="container">
                    <div class="row">
                     <div class="col-md-6"><h3 class="mt-4">Category</h3></div>
                     <div class="col-md-6"><a class="btn btn-dark mt-4" style="margin-left: 360px; margin-bottom: 10px;" href="tbh_kate">Create Category</a></div>
                    </div>
                    <div class="card">
                    <div class="card-body">
                    <ol>
                        @foreach($kate as $e)
                        <li><a href="{{ route('kate', $e->id) }}">{{ $e->nama }}</a></li>
                        @endforeach
                    </ol>
                </div>      
               </div>
              </div>
              <div class="container mb-3">
                    <div class="row">
                     <div class="col-md-6"><h3 class="mt-4">Tag</h3></div>
                     <div class="col-md-6"><a class="btn btn-dark mt-4" style="margin-left: 400px; margin-bottom: 10px;" href="tambah_tag">Create Tag</a></div>
                    </div>
                    <div class="card">
                    <div class="card-body">
                    <ol>
                        @foreach($tag as $t)
                        <li>{{ $t->judul_tag }}</li>
                        @endforeach
                    </ol>
                </div>      
               </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/dtbl_jquery.js')}}"></script>
    <script src="{{asset('js/dtbl_bootsrap.js')}}"></script>

        
  <script>
    $(document).ready(function(){
      $('#myTable').DataTable({
        'info' : false
      }
      );
    })
    
  </script>

</body>
</html>
@endguest