<?php
include("Process/connection.php");
include_once("Process/auth.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="border: 1px solid black">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Action</th>
		</tr>

		<?php
			$sql = "SELECT * FROM users";
			$num = 1;
			$results = $conn->query($sql);
			//var_dump($result = $results->fetch_assoc());
			while($result = $results->fetch_assoc()) {
			 ?>
		<tr>
			<td> <?php echo $num++; ?>  </td>
			<td> <?php echo $result['name']; ?></td>
			<td> <?php echo $result['address']; ?> </td>
			<td> <?php echo $result['phone']; ?> </td>
			<td><img src=""></td>

			<td> 
				<a href="update_form.php?up_id=<?php echo $result['id']; ?>"> Update </a> 
				<a href="insert.php?del_id=<?php echo $result['id']; ?>">Delete</a>	 
			</td>
		</tr>
		<?php
		};
		?>
	</table>
	<br>
	<a href="form.php">Insert More</a>
</body>
</html>