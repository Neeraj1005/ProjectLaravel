<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
	<form action="usercontroller" method="POST">
		@csrf
		<!--other method to write csrf token{{csrf_field()}}-->
		<input type="text" name="user">
		<br><br>
		<input type="text" name="email">
		<br><br>
		<button type="submit" > Submit</button> 
	</form>		
</body>
</html>