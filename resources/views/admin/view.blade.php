@include('admin/partials/header')
@include('admin/partials/sidebar')
@include('admin/partials/nav')

<div class="container">
	<div class="row">
		<div class="header display-7 mr-lg-3">
			choose category
		</div>
		<a href="#"><span class="badge badge-danger">All</span></a>
		@if(count($product) > 0)
		@foreach($product as $data)
		<a href="#" class="ml-lg-1"><span class="badge badge-info">{{$data->category}}</span></a>
		@endforeach
		@endif
	</div>
</div>

<div class="row justify-content-center align-content-center">


    @if(count($product)>0)
    @foreach($product as $key => $data)
    <div class="sidebyside">
        <a href="{{ route('productDetail',$data->id) }}">
            <div class="product-image">
                <img src='/productImage/{{$data->image}}'>
                <div class="cart-button">
                    <form action="{{ url('admin/customize',$data->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <button name="cart-button" class="btn btn-primary">CUSTOMIZE</button>
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
    <h2>{{'Cart is Empty'}}</h2>
    @endif


   </div>