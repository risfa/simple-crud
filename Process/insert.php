<?php 
include("Config/connection.php");

//Insert Row Of data
if(isset($_POST['submit'])){
	//upload file
	$directory = "../uploads/";
	$uploadfile = $directory . basename($_FILES['filetoupload']['name']);

	$password = md5($_POST['password']);

	$sql = "INSERT INTO users(username,password,name,address,phone,image) 
	VALUES('{$_POST['username']}',
	       '{$password}',
	       '{$_POST['name']}', 
	       '{$_POST['address']}', 
	       '{$_POST['phone']}',
	       '{$_FILES['filetoupload']['name']}'
       )";

	if($conn->query($sql) == true){
		if(move_uploaded_file($_FILES['filetoupload']['tmp_name'], $uploadfile)){
			echo "<script>alert('Data inserted');document.location.href='../login.php'</script>";

		}else {
				echo "Something went wrong , Error : " . $conn->error;
				echo "<script>document.location.href = '../form.php' </script>";
			}
		}
}

//Login user
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$query = $conn->query($sql);
	$data = $query->num_rows;



	if($data == '1'){
		$user = $query->fetch_assoc();
		if($user){
	        session_start();
		 	$_SESSION['user'] = $user;
		 	echo "<script>alert('Selamat datang');
		   	document.location.href = '../dashboard.php';
		   	</script>";
		 }
	}else{
	  	echo "<script>alert('username atau password anda salah');
	  	document.location.href = 'login.php';
	  	</script>";
	  	}
}

//Delete Selected Data
if (isset($_GET['del_id'])) {
   $del_id = $_GET['del_id'];
   $query = "DELETE FROM users WHERE id=$del_id";
   if(!$conn->query($query)){
   	echo "Fail to delete Data";
   }

   header("location: view.php");
?>
	<a href="view.php">View Data</a>
<?php
}

//Update Selected data
if(isset($_POST['update'])){
	$up_id = $_GET['id'];
	$query = "UPDATE users SET name = '$_POST[name]' , address = '$_POST[address]' , phone = '$_POST[phone]' WHERE id = $up_id";
	if(!$conn->query($query)){
		echo "Failed to update data , Error : " . $conn->error;
	}
	else{
		echo "Data Updated";
	}
	
?>
	<a href="view.php">View Data</a>
<?php
}

?>

