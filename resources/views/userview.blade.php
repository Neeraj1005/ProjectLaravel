<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<!--This will show an error top up the form-->
	<!--<ul>
		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>-->
	<form action="usercontroller" method="POST">
		@csrf
		<!--other method to write csrf token{{csrf_field()}}-->
		<input type="text" name="user" placeholder="name">
		@error('user')<!--either you can use this also for show an validation error-->
		<div>{{$message}}</div>
		@enderror
		<br><br>
		<input type="text" name="email" placeholder="email">
		@error('email')
		<div>{{$message}}</div>
		@enderror
		<br><br>
		<button type="submit" > Submit</button> 
	</form>		
</body>
</html>