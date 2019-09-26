<!DOCTYPE html>
<html>
<head>
	<title>SessionForm</title>
</head>
<body>
	<form action="sessioncontroller" method="POST">
		@csrf()
		<input type="text" name="user" placeholder="name">
		<input type="password" name="password" placeholder="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>