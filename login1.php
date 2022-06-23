<?php 
error_reporting(0);

 $email = $_POST['email'];
 $password = $_POST['password'];

 $con = new mysqli("localhost","root","","blood donation");
 if($con->connect_error){
  die("Failed :".$con->connect_error);
 } else{
  $stmt = $con->prepare("select * from signupp where email = ?");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0){
   $data = $stmt_result->fetch_assoc();
   if($data['password'] === $password)
   {
    header("location: afterlogin.html");
   } 
   else{
    alert("Invalid Email or password");
   }
 }
}
?>