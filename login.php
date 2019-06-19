<!DOCTYPE html>
<html>
<head>
	<title> login </title>
</head>
<body>
	<form action="Process/insert.php" method="POST">
		username : <input type="text" name="username">
		<br>
		password : <input type="password" name="password">
		<br>
		<input type="submit" value="login" name="login">

		<p>Doesn't have an account? , Sign up <a href="form.php">here</a></p>
	</form>

</body>
</html>