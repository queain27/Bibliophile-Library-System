<!doctype html>
<head>
<meta charset="utf-8">
<title>Register</title>
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
	<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="adminBookView.php"><i class="fa fa-book"></i>Genre</a>
	<div class="sub-navbar-1">
	<ul>
	  <li><a href="fictBook.php">Fiction</a></li>
		 <li><a href="nonFict.Book.php">Non-Fiction</a></li>
		 <li><a href="mysteryBook.php">Mystery</a></li>
	     <li><a href="Ref.BookList.php">References</a></li>
	</ul>
	 </div>
	 </li>
    
	<li><a href="About Us.html"><i class="fa fa-address-card" ></i>About us</a></li> 

	 <li><a href="#"><i class="fa fa-user-circle-o"></i>
	 <div class="sub-navbar-1">
	    <ul>
	     <li><a href="LogOut.php">Logout</a></li>
	     </ul>                                                                            
	</div>
	 
	 </li>
	</ul>
   </div>
   <!-----header----->
   <?php 
   //if(isset($_SESSION["login"])&& isset($_POST['password']))
    //if(isset_SESSION["login"]) && ($_SESSION(["login"])==2)
   ?>
   
  <!-----form register-->
  <style>
  .colorbody
  {background:#B2D9EA; 
  }
   h1
	 { margin:50px 50px;
	  font-family: "Lucida Handwriting",cursive;
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
	 .form-container
    { background:#fff;
      width:720px;
     height:1150px;
     position:relative;
    text-align:center;
     padding: 30px 0;
     margin-top:200px;
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
   { width:35%;
     border:none;
     cursor:pointer;
     margin-top:30px;
	 margin-bottom:10px;
    }
	.form-container form
    { max-width:480px;
      padding:20px 20px;
	  margin:40px auto 40px;
      position:center;
      top:130px;
      transition: transform 1s;
     }
     form input
    {width:100%;
     height:30px;
     margin :20px 20px;
	 text-align:center;
     padding :5px 50px;
     border :1px solid #ccc;
      }
	  form select
	  { margin: 10px 0;
	  }
	 .row1
     { display: flex;
       align-items: center;
       flex-wrap: wrap;
       justify-content: space-around;
      }
	 
  </style>
  
   <center>
   <div class="form-container">
  
   <h1>Register Book </h1>
    <form id="formbook" name="formbook" method="POST" action="updatebookengine.php" enctype="multipart/form-data">
	  <div class="row1">
	  Title Book:
	  <input type="text"  name="txtnamebook" id="txtnamebook"></div>
	  <div class="row1">
	 
	  Image Of Book:
	  <input type="file"  name="image" required="">
	  </div>
	  <div class="row1">
	  Name Author:
      <input type="text" name="txtauthor" id="txtauthor"></div>
	  <div class="row1">
	  ISBN:
	  <input type="text" name="txtisbn" id="txtisbn"></div>
	  <div class="row1">
	  Publisher:
	  <input type="text" name="txtpublish" id="txtpublish"></div>
	  <div class="row1" >
	  Date:
	  <input type="date" name="date" id="date"></div>
	  <div class="row1" >
	  Staff ID:
	  <input type="text" name="txtID" id="txtID"></div>
	  <div class="row1" align="center">
	  
	  Choose Category:
	  
	 <select name="sltcategory">
	 <option>----Choose Category---</option>
         <?php
		    $sql = "SELECT * FROM category";
			$query = mysqli_query($connect,$sql);
			while($row = mysqli_fetch_array($query))
	        {
				if($row['category_id']==1||$row['category_id']==2||$row['category_id']==3)
				{
		 ?>
            <option value="<?php echo $row["category_id"];?>"><?php echo $row["type"];?>
         <?php
				}
			}
			?>
            </select>
      </div>
	  
	   <div class="row1">
	  
	     <button type="submit" class="btn" name="submit" id="submit" value="submit">Submit</button>
	     <button type="reset"class="btn" name="Clear" id="Clear" Value="Clear">Cancel</button>
         <!-- tukar --><a href="nonFict.Book.php" class="btn">Back</a>
	   </div>
	  </form>

   </div>
   </center>
   </body>
   </html>
   