<?php

  $host="localhost";
  $username="root";
  $password="";
  $database="registration";

  //connect to DB
  $conn = new mysqli($host,$username,$password,$database);

  //check if connected
  if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
  }

  ?>
 