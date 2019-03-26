<!DOCTYPE html>
<html>
<head>
	<title>upload image in laravel </title>
</head>
<body>

<h2>image upload form making </h2>

<form action="{{url('upload')}}" enctype="multipart/form-data" files = true method="POST">
	{{csrf_field()}}
	<input type="text" name="name">
	<input type="file" name="file" value="select">
	<input type="submit" name="upload">
	
</form>
{{$file}}
<img src="images/{{$file}} " width="400px" height="300px">

</body>
</html>