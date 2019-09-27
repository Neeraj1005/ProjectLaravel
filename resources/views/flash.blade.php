<!DOCTYPE html>
<html>
<head>
	<title>Flash Session</title>
</head>
<body>
	<form action="flashpost" method="POST">
		@csrf
		<input type="text" name="user">
		<button type="submit" >SubmitData</button>
	</form>
</body>
</html>