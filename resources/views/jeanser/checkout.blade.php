@extends('layout.main')
@section('title','/jeansHouse/checkout')

@section('content')
<div checkout-content>
	<h1>CHECKOUT</h1>
	
</div>

<h3>
	<b>billing details</b>
</h3>
<div class = "checkout-form">
	<form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <table>

		<tr><td>Email Address</td></tr>
		<tr>
		<td> <input type="email" name="userEmail" size="60"></td>
		</tr>

		<tr><td>Name</td></tr> 
		<tr>
	 <td><input type="text" name="userName" size="60"></td>
	</tr>
		
		<tr><td>Address</td></tr> 
		<tr>
		 <td><input type = "text" name = "userAddress" size="60"></td>
		</tr>

		<tr><td>City</td>
        <td></td>
        <td>province</td>
		</tr> 

		<tr>
		 <td><input type="text" name="userCity"></td>>
		 <td></td>
		 <td><input type="text" name="userProvince"></td>
		</tr>

		 <tr><td>
		 	postal code
		 </td>
		 <td></td>
		 <td>phone</td>
		</tr>
           
           <tr>
		 <td><input type="text" name="userPostalCode"></td>
		 <td></td>
		 <td><input type="text" name="userPhone"></td>

         <tr><td> </td></tr>
		 <tr><td><strong> payment details</strong></td></tr>
		 <tr><td>Name on the card</td></tr>
		 <tr><td><input type="text" name="credit-card-name" size="60"></td></tr>

		 <tr><td>Address</td></tr>

		 <tr><td><input type="text" name="card-owner-address" size="60"></td></tr>

		 <tr>
		 	<td>
		 	Expiry
		 </td>
		 <td>CVC Code</td>
		</tr>

		<tr>
			<td><input type="text" name="Expiry"></td>
			<td><input type="text" name="cvc-code"></td>
		</tr>
         
         <tr><td>      <br>   </td></tr>
		<tr><td><button name="checkout-submit" type="submit" class="btn btn-success" style="width: 200px; text-align: center; margin-left: 30px;">complete checkout</button></td></tr>

		</table>
		
	</form>
</div>
@endsection
