<?php 

$conn= new mysqli('localhost','root','','techhatch');

if($conn->connect_error)
{
  die("connection error");
}
else
{
  // echo "connection succesful";
}


?>