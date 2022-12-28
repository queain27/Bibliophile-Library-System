<?php 
session_start();
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="navbar.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playball&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update User Information</title>
<style>
body
	{
		font-family: 'Roboto Condensed', sans-serif;
	}
	.colorbody
	{
		background-color: rgb(238,174,202);
 background: linear-gradient(90deg, rgba(238,174,202,1) 5%, rgba(148,187,233,1) 50%);
	}	
	
	h1
	{
		 font-family: 'Playball', cursive;
		color:#FFA1F1;
	}
.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
				.button {
  background-color:#ADE3FF;
  color: white;
  padding: 10px 30px;
  text-align: center;
 font-family: 'Bebas Neue', cursive;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
	.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
	* {
	  box-sizing: border-box;
	}	

</style>
</head>

<body class="colorbody">
	<center>
					<!-- Nav bar-->
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="#"><i class="fa fa-book"></i>Genre</a> <!-- Ahh punya main page-->
	<div class="sub-navbar-1">
	<ul>
	  <li><a href="fictBook.php">Fiction</a></li>
		 <li><a href="nonFict.Book.php">Non-Fiction</a></li>
		 <li><a href="mysteryBook.php">Mystery</a></li>
	     <li><a href="Ref.BookList.php">Reference Book</a></li>
	</ul>
	</div>
	</li>
	<li><a href="About Us.html"><i class="fa fa-address-card" aria-hidden="true"></i>About us</a></li> 
    <li><a href="dtl_Order.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
	 <li><a href="#"><i class="fa fa-user-circle-o"></i>
	<div class="sub-navbar-1">
	    <ul>
	     <li><a href="Profile 2.php">Profile</a></li>   <!-- Ahh-->
		 <li><a href="ReturnBook.php">Return Book</a></li>  <!--Ahh-->
	     <li><a href="LogOut.php">Logout</a></li>  <!--Pipi-->
	     </ul>
	</div>
	 </li>
	</ul>
	</div>
		</div>
<?php
if(isset($_SESSION["log"]) && ($_SESSION["log"]==1))
{
	$id = $_SESSION['userID'];

	$sql = "SELECT * FROM user WHERE userID = '".$id."'";
	$query = mysqli_query($connect,$sql) or die("Query Fail");
	$data = mysqli_fetch_array($query);

	?>
	<h1>User Information</h1>
	<form id="formEdit" name="formEdit" method="post" action="engineEdit.php">
		<div class="container">
	  <table width="635">
		<tr>
		  <td width="92">User ID:</td>
		  <td width="527"><input type="text" name="iduser" id="iduser"  value="<?php echo $id ?>" readonly="readonly"/></td>
		</tr>
		<tr>
		  <td>Name:</td>
		  <td><input type="text" name="username" value="<?php echo $data["userName"]?>" /></td>
		</tr>
		<tr>
		  <td>Password:</td>
		  <td><input type="password" name="passw" value="<?php echo $data["userPass"]?>" /></td>
		</tr>
		<tr>
		  <td>Address:</td>
		  <td><input type="text" name="addresstxt" value="<?php echo $data["address"]?>" /></td>
		</tr>
		<tr>
		  <td>Email:</td>
		  <td><input type="text" name="emailtxt" value="<?php echo $data["email"]?>" /></td>
		</tr>  
	</table>	
		
		 <p>&nbsp;</p>
		<input type="submit" name="submit" value="UPDATE" class="button button2"><a href="Profile 2.php">
			 </div>
	</form>
<?php
}
?>
	</center>
</body>
</html>