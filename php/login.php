<?php
include 'dbconn.php';

//Get User data
  $username =$_POST['username'];
  $password =$_POST['password'];

  //insert to DB
  $sql = "INSERT INTO system_admin(username, password) VALUES ('$username','$password');";
  if ($conn->query($sql)==TRUE){
    echo "Form Submitted Successfully";
  }
  else{
    echo "Error".$sql."<br>".$conn->error;
  }

  ?>