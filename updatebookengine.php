<?php
session_start();
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
if(isset($_POST['submit']))
   {  
	  
     
       $name=$_POST["txtnamebook"];
      $image = $_FILES["image"]["name"]; 
   $data="/xampp/htdocs/Bibliophile/images".$image;
   // move_uploaded_file($_FILES["image"]["tmp_name"]);
	
	 $author=$_POST["txtauthor"];
	 $isbn=$_POST["txtisbn"];
	 $publisher=$_POST["txtpublish"];
	 $published_date=$_POST["date"];
     $category_id =$_POST["sltcategory"];
	 $adminID=$_POST["txtID"];
	 
	 
     $sql5="INSERT INTO book (`name`,`image`,`author`,`isbn`,`publisher`,`published_date`, `category_id`, `adminID`) VALUES('".$name."','".$image."','".$author."','".$isbn."','".$publisher."','".$published_date."','".$category_id."','".$adminID."')";
	 
	  $result = mysqli_query($connect, $sql5) or die (mysqli_error()); 
	 if($result)
	 {
	 
	    header("Location:adminBookView.php");
		exit();
     }

	 else
    die('Error: ' . mysqli_error($connect));
	 }
	 else
	 {
		 header("Location:updatebookpage.php");
	 exit();
	 }
   

?>
