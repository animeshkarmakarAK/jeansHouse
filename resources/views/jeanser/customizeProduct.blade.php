@extends('layout.admin')

@section('content')
<p>CATEGORY --> </p>
<a href="{{ url('customizeProduct','$category = all') }}">All</a>
<a href="{{ url('customizeProduct', '$category = men') }}">Men</a>
<a href="{{ url('customizeProduct', '$category = women') }}">Women</a>
<a href="{{ url('customizeProduct', '$category = boys') }}">boys</a>
<a href="{{ url('customizeProduct', '$category = girls') }}">girls</a>
<a href="{{ url('customizeProduct', '$category = kids') }}">kids</a>
@endsection