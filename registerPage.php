<?php 
session_start();
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
if(isset($_POST['save']))
{	 
	 $userId= $_POST['userid'];
	 $username = $_POST['username'];
	 $password= $_POST['pass'];
	 $address = $_POST['address'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO user(userID,userName,userPass,address,email)
	 VALUES ('$userId','$username','$password','$address','$email')";
	 if (mysqli_query($connect, $sql)) 
	 {
		echo "<script>'WELCOME MY FRIEND !';
		window.location.href ='Accountpage.php';
		</script>";
		
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connect);
	 }
	 mysqli_close($connect);
}
?>