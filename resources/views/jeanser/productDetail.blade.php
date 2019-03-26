@extends('layout.main')
@section('content')


@foreach($pant as $key =>$data)
<div class="product_details">
    <img id="myimage" src="/productImage/{{$data->image}}" alt="{{$data->name}} picture">

<div class="info">
    
    {{--checking product new or not --}}
    <div class="info-tag"> 
     @if($data->created_at->format('d') == date('d') && $data->created_at->format('H') <= date('H')+12)
       
        <p>Recent</p>;
       @elseif($data->created_at->format('d') <= date('d')+7)
       <p>New</p>;
       @else
       <p>Sale</p>

       @endif
   </div>

	<h3>JeansHouse Exclusive</h3>
	<div class="info-jeans-description">
		{{$data->description}}
		<p>Item#{{$data->id}}</p>
	</div>

<div class="info-jeans-price">
	<p>tk.{{$data->price}}</p>
</div>

<div class="info-jeans-color">
	<p>COLOR:  {{$data->color}}</p>
</div>

<p class="size">size : {{$data->size}}</p>
<div class="order-button">
	<button class="btn btn-primary" name="order-btn">Order Now</button>
	<a href="{{ url('cart',$data->id) }}" type = "button" class="btn btn-primary" name="cart-btn">Add to Bag</a>
	<br>

	<button class="btn btn-primary" name="wish-btn">Add to wish list</button>
</div>

</div>
</div>

<div class="review">
<h2>RATE THIS PRODUCT </h2>
<i class="fa fa-star" aira-hidden = "true"></i>
<i class="fa fa-star" aira-hidden = "true"></i>
<i class="fa fa-star" aira-hidden = "true"></i>
<i class="fa fa-star" aira-hidden = "true"></i>
<i class="fa fa-star" aira-hidden = "true"></i>
<br>

<a href="{{ url('reviewProduct') }} ">Write Review for this product</a>
</div>

@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@if($errors->any())
<h4>{{$errors->first()}}</h4>
<script type="text/javascript">alert({{$errors->first()}});</script>
@endif

@endforeach
@endsection