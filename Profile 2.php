<?php 
session_start();
include 'connection.php';
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
	<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
			.button {
  background-color:#FFAAE8;
  color: white;
  padding: 10px 25px;
  text-align: center;
 font-family: 'Bebas Neue', cursive;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
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

	body
	{
		font-family: Arial, Helvetica, sans-serif;
	}
	.colorbody
	{
		background: rgb(238,174,202);
	    background: linear-gradient(90deg, rgba(238,174,202,1) 2%, rgba(148,187,233,1) 53%);
	}

	header 
	{
		background-color: #D77EBE;
	 	padding: 20px;
	  	text-align: center;
	  	font-size: 40px;
	  	color: #490E6B;
	}

	footer 
	{
	 	 background-color: #D77EBE;
	 	 padding: 20px;
	 	 text-align: center;
	 	 color: white;
	}
	</style>
		<!--- ----header--->
	<body class="colorbody">
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
   <!-----header----->

   

	<header>
	  <p style="font-family:verdana;">MY PROFILE</p>
	</header><br><br><br> <center>
		<?php
if(isset($_SESSION["log"]) && ($_SESSION["log"]==1))
{
	$id = $_SESSION['userID'];

	$sql = "SELECT * FROM user WHERE userID = '".$id."'";
	$query = mysqli_query($connect,$sql) or die("Query Fail");
	$data = mysqli_fetch_array($query);
   $result = $connect->query($sql);
	if ($result->num_rows > 0) {
			// output data of each row
		while($row = $result->fetch_assoc()) {
			
			echo "<tr><td>Username:" . $row["userID"]. "</td><br><td>Name: " . $row["userName"] . "</td><br><td>Account created on:"
				. $row["dateCreated"]. "</td><br><td>Address: " . $row["address"] . "</td><br><td>Email: " . $row["email"] . "</td><br><td></tr>";
		}
			echo "</table>";
		} else { echo "0 results"; }
	$connect->close();
		?>
		<br>
		<a href="profileUpdate.php"><button class="button button2">UPDATE</button></a>
		</center>
     
	<?php
}
		?>
	<footer>
	  <p>Bibliophile Library</p>
	</footer>
</html>