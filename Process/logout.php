<?php 
session_start();
session_unset('user');
echo "<script> alert('Datang lagi gan'); document.location.href = '../login.php' </script>";
?>