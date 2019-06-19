<?php
include("connection.php");

$query = "CREATE TABLE users(
  id int unsigned auto_increment primary key,
  username varchar(255) not null,
  password varchar(255) not null,
  name varchar(255) not null,
  address varchar(255) not null,
  phone int not null,
  image varchar(255) not null
)";


if($conn->query($query) === TRUE){
  echo "Created!";
}
else {
  echo "Fail to create table, Error : " . $conn->error;
}

mysqli_close($conn);
 ?>
