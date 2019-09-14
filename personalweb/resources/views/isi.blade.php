<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>More</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card bg-secondary mt-3">
				@csrf
				<div class="card-body">
				<img src="{{ url('gambar/'.$view->file) }}" style="width: 350px; height: 250px; margin-bottom: 20px;">
					<h3>Judul : {{$view->judul}}</h3>
					<h5>Author : {{$view->author}}</h5>
					@foreach($view->tags as $t)
					<span class="float-left bg-dark rounded text-light p-1 mr-1">{{ $t->judul_tag }}</span>
					@endforeach
	
					<p style="margin-top: 75px;">{!!$view->content!!}</p>
				</div>
			</div>
			<div class="card mt-4 bg-secondary" style="padding-bottom: 50px; padding-left: 50px; padding-right: 50px;">
			<h3 class="mt-4 mb-4">Tinggalkan Komentar Anda!!!</h3>
			<form action="{{ route('tbh_kom') }}" method="POST" class="row">
			@csrf
				<input type="hidden" name="id_kom" value="{{ $view->id }}">
				<div class="col-md-3 mb-2">
				<input type="text" name="nama" class="form-control" placeholder="Nama..">
				</div>
						<div class="col-md-10">
							<textarea name="komentar" class="form-control description" rows="4" placeholder="Tuliskan Komentar..."></textarea>
							<button class="btn btn-success mt-2">Kirim</button>	
						</div>
					</form>
				</div>
			
				<div class="card mt-4">
					<div class="card-body bg-secondary">
					<h3>Semua Komentar</h3>
					<div class="container mt-4">
						@foreach($view2 as $d)
						<div class="row mb-3">
							<div class="col-md-2 text-center border-right" style="margin-left: -20px;">
								<!-- Nama Pengomentar -->
								<img src="{{ asset('gambar/user.png') }}" class="rounded-circle" style="width: 50%;">
								<p class="mt-1 border rounded">{{ $d->nama }}</p>
							</div>
							<div class="col-md-10 bg-light rounded p-2">
								<!-- Komentar -->
								<p>{!! $d->komentar !!}</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mt-1">

      <a class="btn btn-primary mb-3" href="/" style="margin-top: 20px;">Back</a>
		</div>
	</div>
</div>
	</div>
</body>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
    selector:'textarea.description',
    width: 900,
    height: 300
});
</script>

<!-- Ini supaya tidak bisa klik kanan -->
<!-- <script language="javascript">
      var message = "function disabled";
        function rtclickcheck(keyp){if (navigator.appName == "Netscape" && keyp.which == 3){alert("Sorry..."); return false; }
          if (navigator.appVersion.indexOf("MSIE") != -1 && event.button ==2){alert("Sorry..."); return false;}
      } document.onmousedown = rtclickcheck;
</script> -->
</html>
























