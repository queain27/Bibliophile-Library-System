<?php 
session_start(); 
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary"); 
 
if(isset($_GET["action"])) 
{ 
if($_GET["action"] == "delete") 
{ 
foreach($_SESSION["shopping_cart"] as $keys => $values) 
{ 
if($values["item_id"] == $_GET["id"]) 
{ 
unset($_SESSION["shopping_cart"][$keys]); echo '<script>alert("Item Removed")</script>'; 
echo '<script>window.location="#"</script>'; /* user main page */ 
} 
} 
} 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>My Cart</title> 
<link rel="stylesheet" href="navbar.css"> 
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<!-- Font Google --> 
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght
@500&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&display=swap" rel="stylesheet"> 
<!-- --> 
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
<script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style> h1 
{ 
font-family: 'Dancing Script', cursive; text-align: center; 
color: #F76c6c; 
} 
h3 
{ 
text-align: center; 
font-family: 'Dosis', sans-serif; 
} 
body 
{  font-size: 17px; background-color: #A8D0E6; 
font-family: 'Roboto', sans-serif; 
} 
table 
{ 
   background-color: #f8e9a1; 
  
} 
.button { 
  padding: 10px 15px;   font-size: 18px;   text-align: center;   cursor: pointer;   outline: none; 
  color: #fff; 
  background-color: #E7717d; 
  border: none;   border-radius: 15px; 
  box-shadow: 0 9px #999; 
} 
 
.button:hover {background-color:#c2cad0 } 
 
.button:active {   background-color: #c2cad0;   box-shadow: 0 5px #666; 
  transform: translateY(4px); 
} 
.fancyLine7 { 
{ 
border: 18px groove pink; width: 60%; margin-left: auto; 
margin-right: auto; 
} 
</style> 
</head> 
<body> <?php 
if(isset($_SESSION["log"]) && ($_SESSION["log"]==1)) 
{ 
     $id = $_SESSION['userID']; 
 $name=$_SESSION['userName']; 
 
$sql3 = "SELECT * FROM user WHERE userID = '".$id."'"; 
$query = mysqli_query($connect,$sql3) or die("Query Fail"); 
$data = mysqli_fetch_array($query); 
echo $name; 
?> 
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
     <li><a href="LogOut.php">Logout</a></li>  <!--Pipi-->      </ul> 
</div> 
 </li> 
</ul> 
</div> 
</div> 
<!-- nav bar--> 
<div style="clear:both"></div> 
<br /> 
<h1>Order Details</h1> 
 
<?php 
if(!empty($_SESSION["shopping_cart"])) 
{   echo"<div class='table-responsive'>";       echo "<table class='table table-bordered'>"; 
	 	echo"<tr>"; 
echo"<th width='15%'>Item Name</th>"; echo"<th width='5%'>Quantity</th>"; echo"<th width='5%'>Action</th>";     echo"</tr>;"; 
         $total = 0; 
foreach($_SESSION["shopping_cart"] as $keys => $values) 
{ 
?> 
 
<tr> 
<td><?php echo $values["item_name"]; ?></td> 
<td><?php echo $values["item_quantity"]; ?></td> <td><a 
href="dtl_Order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> 
</tr> 
<?php 
$total = $total + ($values["item_quantity"]); 
} 
?> 
<tr> 
<td colspan="2" align="right">Total Books:</td> <td align="right"><?php echo 
number_format($total); ?></td> 
</tr> 
<tr> 
<td colspan="2" align="right"></td> 
<td align="right"> 
<a href="Receipt/ReceiptBorrow.php"><input type="submit" 
name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Check Out"  
 <?php  
$sql = "INSERT INTO receipt (name,userName) VALUES ('$values[item_name]','$name')"; if(mysqli_query($connect, $sql)){     echo "Records inserted successfully."; 
} else{     echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect); }?>/></a></td> 
</tr> 
<?php 
} 
else 
{  echo"<hr class='fancyLine'>";    echo"<h3>The Cart is Empty</h3>"; 
   echo"<br><center><a href='Bookview.php'><button 
class='button'>Back to Home Page</button></a></center>"; 
   echo"<hr>"; 
} 
?> 
</div> 
</table> 
 
</div> 
</div> 
<br /> <?php 
} 
?> 
</body> 
</html> 
