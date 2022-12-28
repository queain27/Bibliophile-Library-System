<?php
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

if(isset($_POST["Send"]))
	{
		$userID = $_POST["txtuserID"]; 



		$sql = "DELETE FROM user WHERE userID = '".$userID."'";
		$query = mysqli_query($connect,$sql) or die(mysqli_error());

		if($query)
		{echo header("Location:ListBorrower.php");
					exit();}
				 else
					 die(mysqli_error());
	}
	else
		echo header("Location:adminMainPage.php");
?>	