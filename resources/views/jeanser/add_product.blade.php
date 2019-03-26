@extends('layout.admin')


@section('content')
<div class="add-product" >
<h3>Add product with product details </h3>
<table align="center !important">
	<form action="{{URL::to('/add product') }}" method="post" enctype="multipart/form-data" >
		{{csrf_field()}}


	<tr>
		<td><strong>Name of jeans</strong></td>
		<td><input type="text" name="jeans-name" size="40" required></td>
	</tr>
	

		<tr>
		<td><strong>Category</strong></td>
		<td><input type="text" name="jeans-category" size="40" list = "category-list" autocomplete="off">
        <datalist id="category-list">
			<option>Men</option>
			<option>Women</option>
			<option>Girl</option>
			<option>Boy</option>
			<option>Baby</option>
		</datalist>
		</td>

	</tr>

		<tr>
		<td><strong>Size</strong></td>
		<td><input type="text" name="jeans-size" size="40" required></td>

	</tr>
	<tr>
		
	</tr>

		<tr>
		<td><strong>Price</strong></td>
		<td><input type="text" name="jeans-price" size="40" required></td>
	</tr>

	<tr>
		
	</tr>

		<tr>
		<td><strong>Color</strong></td>
		<td><input type="text" name="jeans-color" size="40"required></td>
	</tr>
     <tr></tr>

    <tr>
		<td><strong>product description</strong></td>
		<td><textarea name="jeans-description" type="text" cols="40"required></textarea></td>
	</tr> 

		<tr>
		<td><strong>Upload jeans pic</strong></td>
		<td><input type="file" name="jeans-pic"  size="40" required></td>
	</tr>


		<tr>
			<td></td>
				<td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
	</tr>
</form>
</table>
</div>
@endsection
