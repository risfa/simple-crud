<?php
require 'connection.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$query = $conn->query($sql);

if(mysqli_num_rows($query) > 0){
    echo "Login Success";
}else{
    echo "username or password is invalid";
}

?>