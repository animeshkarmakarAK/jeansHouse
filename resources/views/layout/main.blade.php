<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}">
	</head>
	<body>
<div class="nav-main">
	<div class="name">
		<a href="{{ route('home') }}">jeansHouse</a>
	</div>

		<div class="nav-bar">
			<a href="{{ url('shopping-cart') }}"> <i class="fa fa-shopping-bag"></i>My bag<span class="badge">{{count(Session::get('product'))}}</span></a>
			<a href="#"><i class="fa fa-bookmark"></i>My favourite</a>
			
			<div class="dropdown-my-account">
		<a href="#" id = "account-handling" list="account-handling"><i class="fa fa-user"></i>My account</a>
                
                <div class="dropdown-my-account-menu"> 
                	@if(Auth::user())
               <a href="#">{{Auth::user()->name}}</a>
               <a href="#">{{Auth::logout()}}logout</a>
               @else
               <a href="{{ url('userLogin') }}">Login</a>
               <a href="{{ url('userRegister') }}">Register</a>
               @endif
                </div>
            </div>
  
		</div>
	</div>



<div class="main-content" clear>
		<div class="sidebar" style="overflow: hidden">

			   <strong><a href="{{ url('shop') }}" style="color: green;">ALL</a></strong>
			
				<a href="{{ route('mens-product') }}">Men</a>
				<a href="{{ route('womens-product') }}">Women</a>
				<a href="{{ route('boys-product') }}">Boy</a>
				<a href="{{ route('girls-product') }}">Girl</a>
				<a href="{{ route('babies-product') }}">Kid's</a>

			
			
		</div>
		
	</div>

		<div class="content">
			@yield('content')
		</div>

		<div class="footer" >
			<div class="footer-main">
	<h1>SUBSCRIBE NOW!</h1>
	<p>Be the first hearing the latest and get a discount</p>
	<div class="footer-mail-box">
		<form action="#" method="post" enctype="multipart/form-data">
			<input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="mail" id="newsletter" placeholder="Enter your E-mail" title="Enter your E-mail" />

			<input type="submit" name="submit" style="display: none;">
		</form>
	</div>
</div>	       
		</div>

	</body>
</html>