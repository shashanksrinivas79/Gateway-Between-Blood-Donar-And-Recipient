
<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'blood donation');

if(isset($_POST['submit']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$bloodgroup = $_POST['bloodgroup'];
	$area = $_POST['area'];
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$Last_Donated_Date = $_POST['Last_Donated_Date'];

	$query = "INSERT INTO 'donarform'('first_name','last_name','age','gender','email','phone','bloodgroup','area','image','Last_Donated_Date') VALUES ('$first_name','$last_name','$age','$gender','$email','$phone','$bloodgroup','$area','$file','$Last_Donated_Date')";
	$query_run = mysqli_query($connection,$query);


	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Thank You For Registration Please Be available To Donate Blood") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Thank You For Registration Please Be available To Donate Blood") </script>';
	}
}
?>

