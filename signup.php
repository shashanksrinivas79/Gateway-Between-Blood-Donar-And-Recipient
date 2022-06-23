<!DOCTYPE html>
<html>
<title>Blood Donation</title>
<link rel="icon" type="image/x-icon" href="https://t4.ftcdn.net/jpg/03/02/20/53/360_F_302205360_XRk6bfuiRjY6Fr559XU8m50cjQt35h9T.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="home.html" class="w3-bar-item w3-button">Donate Blood Save Life</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="#feedback" class="w3-bar-item w3-button">Feedback</a>
      <a href="needblood.html" class="w3-bar-item w3-button">Need Blood</a>
      <a href="donateblood1.html" class="w3-bar-item w3-button">Donate Blood</a>
    </div>
  </div>
</div>
<div class="w3-container w3-row w3-center">
      <h1 class="w3-center">Reistration Successful..!</h1><br>
      <a href="needblood.html" class="w3-bar-item w3-button w3-center" >Registration Successful...<br>Click here to login...!</a>
</div>

<?php

error_reporting(0);

  $name= $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $number = $_POST['number'];
  $area = $_POST['area'];
  // Database connection
  $conn = new mysqli('localhost','root','','blood donation');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);   
  } else {
    $stmt = $conn->prepare("insert into signupp(name,email,password,number,area) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email,$password,$number,$area);
   $stmt->execute(); 
   

    $stmt->close();
    $conn->close();
  }
?>