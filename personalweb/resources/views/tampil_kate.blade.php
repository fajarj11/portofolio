<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach($tit as $e)
    <title>{{ $e->nama }}</title>
    @endforeach
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

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
                    <table class="table">
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Created Date</th>
                            <th class= "text-center">Modify</th>
                        </tr>
                        @foreach($kate as $d)
                        <tr>
                            <td class="text-center"><img src="{{ url('gambar/'.$d->file) }}" style="width: 50px;"></td>
                            <td class="text-center">{{ $d->judul }}</td>
                            <td class="text-center">{{ $d->content }}</td>
				            <td class="text-center">{{ $d->id_ktg }}</td>
                            <td class="text-center">{{ $d->author }}</td>
                            <td class="text-center">{{ date("d F Y",strtotime($d->created_at)) }}</td>
                            <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('edit', $d->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('del', $d->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
                <a class= "btn btn-success mt-3" href="/tampil">Back</a>
                <div class="container">
                    <div class="row">
                     <div class="col-md-6"><h3 class="mt-4 mb-2">Category</h3></div>
                    </div>
                    <div class="card">
                    <div class="card-body">
                    <ol>
                        @foreach($tit as $e)
                        <li><a href="{{ route('kate', $e->id) }}">{{ $e->nama }}</a></li>
                        @endforeach
                    </ol>
                </div>      
               </div>
              </div>
            </div>
        </div>
    </div>

</body>
</html>
@endguest