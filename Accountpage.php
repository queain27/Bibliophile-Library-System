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
<title>Accountpage</title>
<link rel="stylesheet" href="Accountstyle.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
</head>

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
	   
		 <li><a href="ReturnBook.php">Return Book</a></li>  <!--Ahh-->
	  
	     </ul>
	</div>
	 </li>
	</ul>
	</div>
		</div>
   <!-----header----->

 <!-------- account page------>
 
  <div class="account">
     <div class="contain">
          <div class="row">
           <div class="col-2">
            <img src="download.png" width="100%" >
            </div>
			
	       <div class="col-2">
	            <div class="form-container">
	             <div class="form-btn">
	              <span onclick="login()">Login</span>
				 
	               <span onclick="register()">Register</span>
			        <hr id="Indicator">
	            </div>
			 
		 <form action="Login.php" id="LoginForm" method="post">
		     <input type="text" placeholder="ID" name="iduser">
		     <input type="password" placeholder="Password" name="passUser">
		     <button type="submit" class="btn" >Login</button>
			 
		 </form>
		 
		 <form action="registerPage.php"id="RegForm" method="post">
		 <input type="text" placeholder="ID" name="userid">
		 <input type="text" placeholder="Username" name="username">	 
		 <input type="password" placeholder="Password" name="pass">
		 <input type="text" placeholder="Address" name="address">
	     <input type="email" placeholder="Email" name="email">
		 <button type="submit" class="btn" name="save">Register</button>
		 </form>
	   </div>
	</div>
    </div>
	</div>
	</div>
	

	<!---------js for toggle Form--->
	<script>
	 var LoginForm = document.getElementById("LoginForm");
	 var RegForm = document.getElementById("RegForm");
	 var Indicator = document.getElementById("Indicator");
	  function register()
	  { RegForm.style.transform = "translateX(0px)";
	   LoginForm.style.transform = "translateX(0px)";
	   Indicator.style.transform ="translateX(100px)";
	   }
	    function login()
	  { RegForm.style.transform = "translateX(300px)";
	   LoginForm.style.transform = "translateX(300px)";
	   Indicator.style.transform ="translateX(0px)";
	   }
	 </script>
	
   
   </body>
</html>

   