<?php 
session_start();
if(!isset($_SESSION['user'])){
	echo "<script>document.location.href='login.php'</script>";
}
?>