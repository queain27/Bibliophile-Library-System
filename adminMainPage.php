<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN </title>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
<?php
session_start();
include "connection.php";
?>
</head>
<!--- ----header--->
<body>
<div class="contain">
    <div class="navbar">
	<ul>  
	<li class="active">
	<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
	
    <li><a href="Bookview.html"><i class="fa fa-book"></i>Genre</a>
	<div class="sub-navbar-1">
	<ul>
	  <li><a href="fictBook.php">Fiction</a></li>
		 <li><a href="nonFict.Book.php">Non-Fiction</a></li>
		 <li><a href="mysteryBook.php">Mystery</a></li>
	     <li><a href="Ref.BookList.php">References</a></li>
	</ul>
	 </div>
	 </li>
	<li><a href="About Us.html"><i class="fa fa-address-card"></i>About us</a></li> 
    <li><a href=""><i class="fa fa-user-circle-o"></i>
	<div class="sub-navbar-1">
	    <ul>
	     <li><a href="LogOut.php">Logout</a></li>
	     </ul>
	</div>
	</li>
	</ul>
   </div>
   <!------ header------>
     <style>
	 .body
	 {background-image:url('1.png');
	 
	 }
	 h1
	 { margin-top:100px;
	  font-family: "Lucida Handwriting",cursive;
	 }
	 .btn{
		 width:30%;
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
	 .form-container
    { background:#fff;
      width:520px;
     height:600px;
     position:relative;
    text-align:center;
     padding: 30px 0;
     margin-top:100px;
     box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
     overflow:hidden;
     }
	 .form-container span
     { font-weight:bold;
      padding :0 10px;
      color: #555;
      cursor: pointer;
      width:100px;
      }
     .form-btn
     { display:inline-block;
	
     }
    form .btn
   { width:80%;
     border:none;
     cursor:pointer;
     margin:60px 0;
    }
	 .row
     { display: flex;
       align-items: center;
       flex-wrap: wrap;
       justify-content: space-around;
      }
	 
	 </style>    
	           
	         <center><h1>WELCOME TO BILIOPHILE LIBRARY</h1>
		
	           <div class="form-container">
			    <h1>Menu</h1>
	            <form action="ListBorrower.php">
				 <div class="row"><button class="btn">Members</button></div>
				 </form>
				 <form action="adminBookView.php">
			      <div class="row"> <button class="btn">List of Book</button></div>
				  </form>
				  <form action="LogOut.php">
			     <div class="row"><button type="submit" class="btn" name="logout" id="logout">Logout</button></div>
			    </form>
	            </div>
				</center>
			
   
   
   
   </div>
  </div>
   </body>
   </html>