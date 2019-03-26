@extends('layout.admin')

@section('title','jeanser/admin')

@section('content')
<div class="admin-content">
<div class="welcome-msg">
<h2>Welcome to jeansHouse Admin panel</h2>
</div>
<div class="admin-btn">
	<button class="btn btn-primary"><a href="{{ url('add product') }}">add products</a></button>

	<button class="btn btn-primary"><a href="{{ url('customizeProduct') }}">customize products</a></button>
</div>
</div>
@endsection