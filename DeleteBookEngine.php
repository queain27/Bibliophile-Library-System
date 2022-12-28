<?php 
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

if(isset($_POST["Send"]))
	{   
		$bookID = $_POST["txtbookid"]; 
		$sql = "DELETE FROM book WHERE id= '".$bookID."'";
		$query = mysqli_query($connect,$sql) or die("fail");
    
		if($query)
		{ 
		    header("Location:BookView.php");
                exit();
		}
		   else
		 die("fail");
		 

	}
	else
	{header("Location:Bookview.php");
	exit();
    }
?>