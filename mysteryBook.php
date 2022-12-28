<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			echo'<script>alert("Item Has Been Added Into Cart")</script>';
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mystery Book List</title>
		<link rel="stylesheet" href="navbar.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- Google Font-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ribeye&family=Ribeye+Marrow&family=Yusei+Magic&display=swap" rel="stylesheet">
<style>
		body
		{
			font-family: 'Yusei Magic', sans-serif;
			
		}
	h2
		{  
			font-family: 'Ribeye', cursive;
			color:tan;
			text-align: center;
		}
	hr.style-eight {
    overflow: visible; /* For IE */
    padding: 0;
    border: none;
    border-top: medium double #333;
    color: #333;
    text-align: center;
}
hr.style-eight:after {
    content:"\1F4D6";
    display: inline-block;
    position: relative;
    top: -0.7em;
    font-size: 1.5em;
    padding: 0 0.25em;
    background:repeat;
}
	.row
         { display: flex;
           align-items: center;
           flex-wrap: wrap;
            justify-content: space-around;
         }
		 .btn-1{
	
	      display:inline-block;
	      background: #1351E4;
	      color:#FFFFFF;
	       padding:8px 30px;
	      margin:50px 0;
	      border-radius:30px;

	      transition:background 0.5s;
          }
         .btn-1:hover
        {background:#563434;
        }
		   </style>
			
<!--- ----header--->
<body class="colorbody">
<?php
if(isset($_SESSION["log"]) && ($_SESSION["log"]==1))
{
	 {     
	   $id = $_SESSION['userID'];
	$sql = "SELECT * FROM user WHERE userID = '".$id."'";
		$query = mysqli_query($connect,$sql) or die("Query Fail");
		$data = mysqli_fetch_array($query);
		echo $_SESSION["userName"]; 
}

?>
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="Bookview.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="Bookview.php"><i class="fa fa-book"></i>Genre</a> <!-- Ahh punya main page-->
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
    <li><a href="Accountpage.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
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

		<!-- nav bar-->
		<br />
		
			<br />
			<br />
			<br /><br />
			<h2> CHILDREN MYSTERY</h2>
		<br>
		<div class="container">
			<?php
				$query = "SELECT * FROM book where category_id='10'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				<form method="post" action="mysteryBook.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> 

					</div>
				</form>
			</div>
				
			<?php
					}
				}
			?>
		</div><br>
		<hr class="style-eight">
		<div class="container">
			<h2> ADULT MYSTERY </h2>
			<br /><br />
			<?php
				$query = "SELECT * FROM book where category_id='11'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				
				<form method="post" action="mysteryBook.php"ook.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>		
			<?php
					}
				}
			?>
		</div> <br /> <br />
	<hr class="style-eight">
		<div class="container">
			<h2> TEEN MYSTERY </h2>
			<br /><br />
			<?php
				$query = "SELECT * FROM book where category_id='12'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				
				<form method="post" action="mysteryBook.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>		
			<?php
					}
				}
			?>
		</div>
<?php
}   //user session
	
else
{  ?>
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="adminMainPage.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="adminBookView.php"><i class="fa fa-book"></i>Genre</a> <!-- Ahh punya main page-->
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
	 <li><a href="#"><i class="fa fa-user-circle-o"></i>
	<div class="sub-navbar-1">
	    <ul>
	     <li><a href="LogOut.php">Logout</a></li>  <!--Pipi-->
	     </ul>
	</div>
	 </li>
	</ul>
	</div>
		</div>
		<!-- nav bar-->
		<br />
		
			<br />
			<br />
			<br /><br />
			<h2> CHILDREN MYSTERY</h2>
		<br>
		<div class="container">
			<?php
				$query = "SELECT * FROM book where category_id='10'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				<form method="post" action="mysteryBook.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> 

					</div>
				</form>
			</div>
				
			<?php
					}
				}
			?>
		</div><br>
		<hr class="style-eight">
		<div class="container">
			<h2> ADULT MYSTERY </h2>
			<br /><br />
			<?php
				$query = "SELECT * FROM book where category_id='11'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				
				<form method="post" action="mysteryBook.php".php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>		
			<?php
					}
				}
			?>
		</div> <br /> <br />
	<hr class="style-eight">
		<div class="container">
			<h2> TEEN MYSTERY </h2>
			<br /><br />
			<?php
				$query = "SELECT * FROM book where category_id='12'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
	
			<div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
				
				<form method="post" action="mysteryBook.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#F4DCD6; border-radius:5px; padding:14px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" style="width:120px;height:160px" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<input type="hidden" name="quantity" value="1"/>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>		
			<?php
					}
				}
			?>
		</div>
<form action="updatebookMystery.php">
			<div class="row">
			  <button type="submit" class="btn-1" name="submit" id="submit">Update</button>
			</form>
			<form action="deleteMysteryBook.php">
			  <button type="submit" class="btn-1" >Delete</button>
			</form>
			<form action="adminBookView.php">
			  <button type="submit" class="btn-1">Back</button>
			</form>
			</div>
		</style>
	</head>
<?php
	
}
	?>
	</body>
</html>
