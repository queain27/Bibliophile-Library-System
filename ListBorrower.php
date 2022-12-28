<!doctype html>
<head>
<meta charset="utf-8">
<title>ListBorrower</title>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

?>
</head>
<body class="colorbody">
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="adminBookView.php"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="adminBookView.php"><i class="fa fa-book"></i>Genre</a>
	<div class="sub-navbar-1">
	<ul>
	  <li><a href="Home.html">Fiction</a></li>
		 <li><a href="Home.html">Non-Fiction</a></li>
		 <li><a href="Home.html">Mystery</a></li>
	     <li><a href="Home.html">References</a></li>
	</ul>
	 </div>
	 </li>
    
	<li><a href="About Us.html"><i class="fa fa-address-card" ></i>About us</a></li> 
	 <li><a href="#"><i class="fa fa-user-circle-o"></i>
	 <div class="sub-navbar-1">
	    <ul>
	     <li><a href="Home.html">Logout</a></li>
	     </ul>                                                                            
	</div>
	 
	 </li>
	</ul>
   </div>
   <!------List Of Borrower-->
   
    <style>
	h1
	 { margin:50px 50px;
	  font-family: "Lucida Handwriting",cursive;
	  font-size : 50px;
	 }
	 
	 P
	 {font-size : 25px;
	 }
	 
    .btn{
	display:inline-block;
	background: #1351E4;
	color:#FFFFFF;
	padding:8px 30px;
	margin:30px 0;
	border-radius:30px;

	transition:background 0.5s;
    }
    .btn:hover
    {background:#563434;
    }
	.form display
	{ margin:30px 0px;
	}
	</style>
	<?php
   $userID = "";
   if(isset($_POST["Search"]))
   {
	   $userID = $_POST["txtuserID"];
   }
 
   $sql = "SELECT * FROM user WHERE  userID LIKE '".$userID."%'";
   $query = mysqli_query($connect,$sql) or die(mysqli_error());
  
?>
    <center>
	<h1>MEMBERS</h1>
	<form class="display" action="ListBorrower.php" method="post" name="frmSearch">
	<p>Enter user ID :
	<input name="txtuserID"  type="text" size="30" maxlength="10"/>
	<input class="btn" name="Search" type="submit" value="SEARCH"/>
	</p>
	</form>
	<table width="80%" border="1">
	<tr>
		<td>Number</td>
		<td>User ID</td>
		<td>User Name</td>
		<td>Date</td>
		<td>ACTION</td>
	</tr>
	<?php
      $x=1;
      while($row = mysqli_fetch_array($query))
	  {
	?>
		<tr>
		<td><?php echo $x;?></td>
		<td><?php echo $row["userID"]?></td>
		<td><?php echo $row["userName"]?></td>
		<td><?php echo $row["dateCreated"]?></td>
		<td><a href ="deleteuser.php?userID=<?php echo $row["userID"];?>">DELETE</a></td>
		</tr>
	<?php
        $x++;
		}
	?>
	</table>
	<form action="adminMainPage.php">
    <button class="btn">Menu</button>
    </form>
	</center>
	

   
   
   </div>
   </body>
   </html>
   
 