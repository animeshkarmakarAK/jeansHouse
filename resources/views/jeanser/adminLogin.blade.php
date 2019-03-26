@extends('layout.admin')
@section('title','jeanser/admin')
@section('content')
<div class="admin-content-login">
<div class="welcome-msg">
<h2>Welcome to jeansHouse Admin panel</h2>
</div>
<div class="admin-btn">
	<button class="btn btn-primary"><a href="#">add products</a></button>

	<button class="btn btn-primary"><a href="#">customize products</a></button>
</div>

<div class="register-form">
   @if(isset($registerBtn))
   <div class="login-header">
		<h4>Register</h4>
	</div>
	<form action="{{ url('adminRegister') }}" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<p><strong>First name : </strong></p><input type="text" name="firstName" placeholder="First name" autocomplete="off" size="30" required><br><br>
		<p><strong>Last name : </strong></p><input type="text" name="lastName" placeholder="Last name" autocomplete="off" size="30" required><br><br
		<p><strong>Eamil : </strong></p><input type="email" name="email" placeholder="example@email.com" autocomplete="off" size="30" required ><br><br>
		<p><strong>Password : </strong></p><input type="password" name="password" autocomplete="off" size="30" placeholder="******************" required><br><br>
		<p><strong>Retype Password : </strong></p><input type="password" name="retypePassword" autocomplete="off" size="30" placeholder="******************" required><br><br>
		<input type="submit" name="login-btn" class="btn btn-primary" value="Register" >
	</form>

	<h3>Registered user?</h3>
	<a href="{{ url('admin') }}" type="button" class="btn btn-primary success">Login</a>

   @else
	<div class="login-header">
		<h4>login</h4>
	</div>
	<form action="{{ url('adminLogging') }}" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<p><strong>Eamil : </strong></p><input type="email" name="email" placeholder="example@email.com" autocomplete="on" size="30" required><br><br>
		<p><strong>Password : </strong></p><input type="password" name="password" autocomplete="off" size="30" placeholder="******************" required ><br><br>
		<input type="submit" name="login-btn" class="btn btn-primary" value="Login">
	</form>

	<h3>Not a registered user?</h3>
	<a href="{{ url('adminRegister') }}" type="button" class="btn btn-primary success">Register</a>
	@endif
</div>
</div>
@endsection