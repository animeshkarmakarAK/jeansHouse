<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	</head>
	<body>
	<div class="nav-main">
		<div class="name">
			<a href="{{ route('admin') }}">jeansHouse</a>
		</div>

		<div class="nav-bar">
			<a href="#">Admin
			</a>
			<a href="#">profile</a>
         
		</div>
	</div>



<div class="main-content" clear>
        <div class="content">
			@yield('content')
		</div>
		
	</div>


	</body>
</html>