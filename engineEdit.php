<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>USER UPDATE</title>
<?php 
session_start();
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
?>
</head>

<body>
<?php
	if(isset($_POST['submit']))
	{
$id= $_POST["iduser"]; 
$name = $_POST["username"];
$pw = $_POST["passw"];
$address= $_POST["addresstxt"];
$email= $_POST["emailtxt"];


$sql = "UPDATE user SET userName = '".$name."',userPass = '".$pw."',address = '".$address."',email = '".$email."'WHERE userID = '".$id."'";
		
$query = mysqli_query($connect,$sql) or die(mysqli_error());
if($query) 
{  echo "<meta http-equiv=\"refresh\" content=\"2;URL=Profile 2.php\"/>";
   echo "<script type='text/javascript'> 
 			alert('You have successfully updated your profile!') 
 			</script>"; 
}
	     else
		     die(mysqli_error());
	}
?>

</body>
</html>