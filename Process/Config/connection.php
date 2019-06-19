<?php
$servername = "localhost";
$username = "dapps";
$password = "l1m4d1g1t";
$dbname = "dapps_batman_crud_mamat";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
  echo "Not Connected, Error: " . mysqli_connect_error();
}


 ?>
