@extends('layout.main')
@section('title','jeanser/mens-product')

@section('content')
<div class="product-main"  clear>
    @if(count($pant)>0)
 @foreach($pant as $key => $data)
    <div class="sidebyside">

       
        <a href="{{ route('productDetail',$data->id) }}">
            <div class="product-image">
            <img src='productImage/{{$data->image}}'>

            <div class="cart-button">
                <form action="{{ url('cart',$data->id) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
            <button name="cart-button" class="btn btn-primary">ADD TO CART</button>

               </form>

        </div>
        </div>
        </a>

        {{$data->name}}
        <br>
        {{'size  '}}{{$data->size}}
        <br>
        {{'price:  '}}{{$data->price}}
    </div>
    @endforeach
    @else
    <h2>{{'There is no Mens product available now!'}}</h2>
    @endif
  </div>
@endsection