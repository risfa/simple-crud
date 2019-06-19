<?php
require 'connection.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];
$cat = $_POST['cat'];

if($cat == "user"){
    $type = 1;
}else{
    $type = 2;
}

$sqlCheck = "SELECT * FROM users where email= '$email'";
$query = $conn->query($sqlCheck);
if(mysqli_num_rows($query) >= 1 ){
    echo "2";
}else{

    $sql = "INSERT INTO users VALUES(NULL,'$username','$password','$name', '$email','$type')";
    $query = $conn->query($sql);

    if($query){
        echo '1';
    }else{
        echo '0';
    }
}


?>