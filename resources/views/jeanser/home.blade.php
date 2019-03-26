
@extends('layout.main')
@section('title','jeanserhome')

@section('content')
<img src="/images/homePagePic.jpg">


<h1 class="shop-header">SHOP IN JEANSHOUSE</h1>
@if((isset($product)))
@foreach($product as $key => $data)
    <div class="sidebyside">
       
        <a href="{{ route('productDetail',$data->id) }}"><img src='/productImage/{{$data->image}}'></a>
                {{$data->name}}
                {{$data->id}}

        
    </div>
@endforeach
     {{--$product->last()->id--}}

<form action= " {{url('LoadMore',$product->last()->id) }}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
<button  name="loadMore" class="btn btn-primary">LOAD MORE</button>
</form>

  @else

<form action= " {{ url('LoadMore') }}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
<button  name="loadMore" class="btn btn-primary">LOAD MORE</button>
</form>

@endif
@endsection

@section('footer')

@endsection