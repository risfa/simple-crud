<?php 
include_once('Process/auth.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['user']['name']?></h1>
	<a href="Process/logout.php">Logout</a>
	<a href="file_form.php">Write Some File Here</a>
</body>
</html>