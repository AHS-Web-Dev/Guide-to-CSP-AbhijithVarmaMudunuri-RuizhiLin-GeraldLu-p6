<?php
$name="localhost";
$username = "root";
$password = "";
$database = "lml";
$connect=mysqli_connect($name,$username,$password,$database);
if(!$connect)
{
  die("Could not connect" . mysqli_connect_error());
}
if(isset($_POST['sub']))
{
  $username1 = $_POST['username'];
  $message = $_POST['message'];
  $email = $_POST['email'];
  $cellphone = $_POST['cellphone'];
  $sql_query = "INSERT INTO lmldata (username1,message,email,cellphone)
  VALUES ('$username1','$message','$email','$cellphone')";
  if(mysqli_query($connect, $sql_query))
  {
    echo "connect.html";
  }
  else
  {
    echo "Error: " . $sql . "" . mysqli_error($connect);
  }
  mysqli_close($connect);
}
?>