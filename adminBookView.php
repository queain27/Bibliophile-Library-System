<!doctype html>
<head>
<meta charset="utf-8">
<title>ListBook</title>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
?>     
  <style>
    .small-container
    {max-width:1080px;
     margin:auto;
	 padding-left:25px;
	 padding-right:25px;
	}
	   h1
     { text-align:center;
       margin:200px auto 80px;
       position:relative;
       line-height:60px;
     }
	 h1
		{
			font-size : 70px;
			 font-family: "Lucida Handwriting",cursive;
			color:black;
			animation-name:Title;
			animation-duration: 1s;
			animation-iteration-count: infinite;
		}
		
         @keyframes Title
		{
			from {color: black;}
			to{color:red};
		}
		  h2
       { text-align:center;
         margin:60px auto 30px;
         position:relative;
         line-height:60px;
	     font-size: 70px;
		 font-family: "Lucida Handwriting",cursive;
       }
	 
	  .col
       { flex-basis: 50%;
         min-width: 300px;
 
        }
		.col img
       { display:flex;
         max-width: 200%;
         padding: 100px 250px;
	     margin-top:30px;
	     width :60%;
		 transition:transform 0.5s;
       }
	   .col:hover
	  { transform: translateY(-15px);
	  }

	 
	  .col-4
	  { flex-basis:25px;
      padding:10px;
	  min-width:200px;
	  margin-bottom:50px;
	  transition:transform 0.5s;
	  }
	  .col-4 img{
	  width:100%;
	  }
	  .col-4:hover
	  { transform: translateY(-5px);
	  }
	  .row
     { display: flex;
       align-items: center;
       flex-wrap: wrap;
       justify-content: space-around;
      }
      .col-4 p
	  { font-size:14px;
	  }
	  .rating .fa{
	  color:#ff523b;
	  }
	 

	
   </style>
</head>
<!--- ----header--->

<body>
<?php if (isset($_SESSION['adminID']) && isset($_SESSION['adminPass']))
?>
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
   <div class="small-container">

	   <h1>RECOMMENDED BOOKS </h1>

	   <div class="row">
			<div class="col-4">
			 <img src = "images/nonfic4.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Humongous Fungus</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

			<div class="col-4">
			 <img src = "/Bibliophile/images/book1.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
				<h3>The Little House</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

			<div class="col-4">
			<img src ="/Bibliophile/images/book11.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Black Box</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

			<div class="col-4">
			 <img src = "/Bibliophile/images/refbook6.png" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Bacalah Anakku/h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

	   </div>
	   <div class="row">
			<div class="col-4">
			 <img src = "/Bibliophile/images/stargazing.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Star Gazing</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

			<div class="col-4">
			 <img src = "/Bibliophile/images/refbook9.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Solat</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>

			<div class="col-4">
			 <img src = "/Bibliophile/images/Famous-Last-Words.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>Famous Last Words</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			 </div> 
			</div>

			<div class="col-4">
			 <img src = "/Bibliophile/images/nonfic7.jpg" alt = "RECOMMENDED" align = "middle" width="350" height="206.25">
			 <h3>The Truth We Hold</h3>
			 <div class="rating">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			 <i class="fa fa-star-o"></i>
			 </div>
			</div>
	   </div>
   </div>
   <h2>Genre</h2>
     <div class ="col">
	 <a href="fictBook.php">
    <img src="fiction.png">
	</a>
	</div>
	<div class ="col">
	<a href="nonFict.Book.php">
    <img src="nonfiction.png">
	</a>
	</div>
   <div class ="col">
   <a href="mysteryBook.php">
    <img src="book.png">
	</a>
	</div>
   <div class ="col">
    <a href="Ref.BookList.php">
    <img src="reference.png" >
	</a>
	</div>
	<div class ="col">
	<style>
	 .btn{
		 width:20%;
	display:inline-block;
	background: #1351E4;
	color:#FFFFFF;
	padding:8px 30px;
	margin:15px 0;
	border-radius:30px;
	transition:background 0.5s;
    }
    .btn:hover
    {background:#563434;
    }
	
	</style>
<center>
	<form action="adminMainPage.php">
    <button class="btn">Menu</button>
		
    </form>
	</div>
	</center>
 
   </body>
   </html> 

