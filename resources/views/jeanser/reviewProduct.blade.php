@extends('layout.main');

@section('content')

<div class="reviewForm">
	<form action="{{ url('review') }}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<table>
			<tr>
				<tr><td>Rating point(out of 5)</td></tr>
				<td><input type="text" name="ratingPoint" size="10" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>Write Review description</td>
			</tr>
			<tr>

				<td>
					<input type="text" name="reviewDescription" size="50" autocomplete="off" required>
				</td>
			</tr>
			<tr><td><br></td></tr>
			<tr><td><input type="submit" name="review-submit" class="btn btn-success" value="post review" width="100px"></td></tr>
		</table>
	</form>
</div>
@endsection