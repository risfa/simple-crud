<?php
include('connection.php'); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		if(isset($_GET['up_id'])){
			$id = $_GET['up_id'];
			$sql = "SELECT * FROM users WHERE id='$id'";
			$query = $conn->query($sql);
			$result = $query->fetch_assoc();
		}
		 ?>
</head>
<body>
	<form method="post" action="insert.php?id=<?php echo $result['id'] ?>">

		nama : <input type="text" name="name" value="<?php echo $result['name']; ?>"> <br>
		address : <input type="text" name="address" value="<?php echo $result['address']; ?>"> <br>
		phone : <input type="text" name="phone" value="<?php echo $result['phone']; ?>"> <br>

		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>