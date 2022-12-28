<!--Tambah dekat head -->
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!doctype html>
	
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ribeye&family=Ribeye+Marrow&family=Yusei+Magic&display=swap" rel="stylesheet">

<title>Return Book</title>
<style>
	
/* Recommended Blink Text */
.Information 
{font-size : 15px;
 color:black;
 animation-name:Title;
 animation-duration: 2s;
 animation-iteration-count: infinite;
}
		
@keyframes Title
{from {color: blue;}
to{color:red};
}

body
{font-family: 'Yusei Magic';
 background-color: rgb(238,174,202);
 background: linear-gradient(90deg, rgba(238,174,202,1) 5%, rgba(148,187,233,1) 50%);
}
	.button {
  background-color:#FFAAE8;
  color: white;
  padding: 15px 32px;
  text-align: center;
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
</style>
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


<span class="Information">
<h1 align="center">Detail Return Book!!!!</h1></span>
<fieldset >
<div class="row">
<div class="column"><br>
<body>
<center><form action="ReturnReceipt.php" method="post">
<table border=0>
     <tr>
	<h3>PLEASE KEY IN YOUR DATA ACCURATELY!</h3>
	<br>
	 </tr>
<tr> 
     <td><label class="col-sm-3 " for="name">NAME:</label></td>
     <td><input type="text" name="user_name" class="form-control" id="inName" placeholder="NAME" required></td>
</tr>
    
     <tr> 
            <td><label class="col-sm-3 " for="TITTLEBOOK">TITLE BOOK:</label></td>
            <td><input type="text" name="title" class="form-control" id="title" placeholder="TITTLEBOOK" required></td>
     </tr>

      <tr> 
            <td><label class="col-sm-3 " for="TITTLEBOOK">TITLE BOOK:</label></td>
            <td><input type="text" name="title2" class="form-control" id="title2" placeholder="TITTLEBOOK"></td>
     </tr>

      <tr> 
            <td><label class="col-sm-3 " for="TITTLEBOOK">TITLE BOOK:</label></td>
            <td><input type="text" name="title3" class="form-control" id="title3" placeholder="TITTLEBOOK"></td>
     </tr>
      <tr> 
            <td><label class="col-sm-3 " for="TITTLEBOOK">TITLE BOOK:</label></td>
            <td><input type="text" name="title4" class="form-control" id="title4" placeholder="TITTLEBOOK" ></td>
     </tr>
      
     <tr> 
         <td><label class="col-sm-3">ISSUE DATE:</label></td>
         <td><input type="date"  name="borrow_date" required></td>
     </tr>
         <tr><td><label class="col-sm-3">RETURN DATE:</label></td>
         <td><input type="date"  name="return_date" required></td>
     </tr>
</table><br>
<input type="submit" value="Return" class="button button2">
</fieldse></form></center>
	
	
	
</body>
</html>