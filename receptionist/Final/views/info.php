<?php
session_start();
require_once('../models/billDb.php');

  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  

  $html = "
    <h2>Recovery requested:</h2>
    <p>Name: $name</p>
   
    <p>username: $username</p>
    <p>password: $password</p> 
  ";

  echo $html;
?>
