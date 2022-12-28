<!doctype html><head>
<meta charset="utf-8">
<title>Accountpage</title>
<link rel="stylesheet" href="Accountstyle.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
<?php
session_start();
include "connection.php";
?>
</head>
<!--- ----header--->
<body class="colorbody">
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
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
    <li><a href="dtl_Order.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
	<div class="sub-navbar-1">
	    <ul>
	     <li><a href="#">Profile</a></li>   <!-- Ahh-->
		 <li><a href="ReturnBook.php">Return Book</a></li>
	     <li><a href="LogOut.php">Logout</a></li>  <!--Pipi-->
	     </ul>
	</div>
	 </li>
	</ul>
   </div>
   <!-----header----->
  <!--------Account page------>
  <style>
 
  .error
  { background: #F2DEDE;
    color:#A94442;
	padding: 10PX;
	width:95%;
	border-radius:5px;
	margin:20px auto;
  }
  </style>
  <div class="account">
     <div class="contain">
          <div class="row">
           <div class="col-2">
            <img src="download.png" width="100%">
            </div>
			
	       <div class="col-2">
	            <div class="form-container">
	               <form id="login" name="login" action="Login.php" method="post" name="login">Login
				    <hr id="Indicator">
					<?php if (isset($_GET['error'])){?>
					<p class="error"><?php echo $_GET['error'];?></p>
					<?php }?>
		             <input type="text" placeholder="ID" name="userid" id="userid">
		             <input type="password" placeholder="Password" name="password" id="password">
					 
		              <button type="submit" class="btn" name="status" id="status" value="admin">Login</button>
					 </form>
	   </div>
	</div>
    </div>
	</div>
	</div>
	 </body>

 
   