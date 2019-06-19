<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Process/insert.php" enctype="multipart/form-data">
		username : <input type="text" name="username"> <br>
		password : <input type="password" name="password"> <br>
		name : <input type="text" name="name"> <br>
		phone : <input type="text" name="phone"> <br>
		address : <input type="text-area" name="address">
		<br>
		<input type="file" name="filetoupload" id='filetoupload'> <br>
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>