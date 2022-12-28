<!doctype html>
<head>
<meta charset="utf-8">
<title>BookList</title>
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
	<a href="Home.html"><i class="fa fa-home"></i>Home</a></li>
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
	border-radius:50px;

	transition:background 0.5s;
    }
    .btn:hover
    {background:#563434;
    }
	.form display
	{ margin:30px 0px;
	}
	.row-1
     { display: flex;
       align-items: center;
       flex-wrap: wrap;
       justify-content: space-around;
      }
	</style>
	<?php
   $bookid = "";
   
   if(isset($_POST["Search"]))
   {
	   $bookid = $_POST["txtbookid"];
   }
 
   $sql = "SELECT * FROM book WHERE  category_id LIKE '".$bookid."%'";
   $query = mysqli_query($connect,$sql) or die(mysqli_error());
   
?>
   <center>
    <h1>Mystery Book</h1>
    <form  action="deleteMysteryBook.php" method="post" name="frmSearch">
	<p>Enter category :
	<input name="txtbookid"  type="text" size="30" maxlength="10"/>
	<input class="btn" name="Search" type="submit" value="SEARCH"/>
	</p>
	</form>

	<table width="80%" border="1">
	<tr>

		<td>Book ID</td>
		<td>Title</td>
		<td>Image</td>
		<td>Author</td>
		<td>Publisher</td>
		<td>Published Date</td>
		 <td>Category</td>
		 <td>AdminID</td>
	     <td>Action</td>
	</tr>
	
    </center>
    
	<?php
      $x=1;
     
	   while($row = mysqli_fetch_array($query))

	    
        {
		if($row['category_id']==10||$row['category_id']==11||$row['category_id']==12)
	     {
	?>
		<tr>
	  <td><?php echo $row["id"]?></td>
		<td><?php echo $row["name"]?></td>
		<td><?php echo $row["image"]?></td>
		<td><?php echo $row["author"]?></td>
		<td><?php echo $row["publisher"]?></td>
		<td><?php echo $row["published_date"]?></td>
		<td><?php echo $row["category_id"]?></td>
		<td><?php echo $row["adminID"]?></td>
		<td><a href ="DeleteBookPage.php?bookid=<?php echo $row["id"];?>">DELETE</a></td>
		</tr>
		
	</center>  
	<?php
	  }
		}
       $x++;
	  
	?>
  
	</table>
	<center>
	<div class="row-1">
    <form action="mysteryBook.php">
        <button class="btn">Back</button>
         </form>
		 <form action="adminview.php">
    <button class="btn">Menu</button>
    </form>
	</div>
	</center>
	</body>
	</html>
	