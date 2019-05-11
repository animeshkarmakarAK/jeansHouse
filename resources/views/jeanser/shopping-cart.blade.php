@extends('layout.main')
@section('title','jeansHouse/shopping-cart')

@section('content')
<div class="cart-title">
	<h1>YOUR BAG</h1>
</div>



<div class="cart">
@if(Session::has('product'))
<div class="count">
{{$count = 0}};
</div>

<div class="cart-box">
		<table>
			<tr>
				<th>ITEM</th>
				<th>QUANTITY</th>
				<th>TOTAL PRICE</th>
			</tr>
		</table>
			<div class="cart-items">
@foreach(Session::get('product') as $items)
<table>
		<tr>
			<td><a href="{{ url('productDetail',$items[0]['id']) }}"><img src="/productImage/{{$items[0]['image']}}"></a>
				{{$items[0]['name']}}<br>
			#item : {{$items[0]['id']}}<br>
		    {{$items[0]['description']}}
		    <br>
		   </td>
			<td>1</td>
			<td>{{$items[0]['price']}}.tk</td>

			<td>
				
<a href="{{ url('removeFromCart',$items[0]['id']) }}" type="button" class="btn btn-primary">Remove</a>


			</td>
		</tr>
	</table>


<div class="count">
{{$count++}};
</div>
<br>
<br>
@endforeach
</div>
</div>

@else
<div class="cart-box">
		<table>
			<tr>
				<th>ITEM</th>
				<th>QUANTITY</th>
				<th>TOTAL PRICE</th>
			</tr>

			<tr>
				<td><h3>There is no item in your bag</h3></td>
			</tr>
		</table>
	</div>

@endif



<div class="order-summary">
	<table>
	<tr>
		<th>ORDER SUMMARY</th>
	</tr>
	<tr>
		<td>Subtotal:
	
			@if(Session::has('product'))
			<p style="display: none;">{{$sum = 0}}</p>
			@foreach(Session::get('product') as $item)
			
			
			<div class="calculate-sum-of-price" style="display: none;">
				
           {{$sum = $sum + $item[0]['price']
                                    }}     
                                    </div>         
			@endforeach
		
			{{$sum}}.tk
				@endif
		</td>
	</tr>
	<tr></tr>
	<tr>
		<td>shipping charge : </td>
	</tr>
<tr></tr>
	<tr>
		<td>Tax: </td>
	</tr>
	</table>
</div>




</div>

@if ($msg)
    <div class="alert alert-danger col-md-3 ml-2" style="margin-left: 35px; margin-top: 30px;">
    {{$msg}}
    </div>
@endif

@if(session::has('product'))
<div class="checkout-button">
	<a href = "{{ url('checkout') }}" type = "button" name="checkout" class="btn btn-success">CHECKOUT</a>
</div>
@endif

<div class="shoppingIndex">
	<a href="{{ url('jeansHouseShop') }}" type = "button" name = "shopping-index" class="btn btn-primary">continue shopping</a>
</div>
@endsection