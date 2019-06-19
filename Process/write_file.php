<?php 
//write file here
if(isset($_POST['add'])){
	session_start();
	$filename = $_SESSION['user']['name'] . $_SESSION['user']['id'] . '_' . $_POST['filename'] . '.txt';
	if(file_exists($filename)){
		$file = fopen($filename, 'a') or die('Cannot Open File');
	}
	else{
		$file = fopen($filename, 'w') or die('Cannot Open File');
	}
	fwrite($file, $_POST['file_body']);
	fclose($file);
	echo "<script>alert('File Created');
	document.location.href = 'dashboard.php';</script>";
}

?>