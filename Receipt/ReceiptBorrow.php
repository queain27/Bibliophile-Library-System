<?php 
session_start();
 $connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
?>
<!DOCTYPE html>
<html>
<div id="divToPrint">
   <head>
	   <!-- Google Font -->
	   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Sofia&display=swap" rel="stylesheet">
	 <!---->
      <title>RECEIPT BORROW BOOK</title>
	   <style>
	   h3
		   {
			    font-family: 'Quicksand', sans-serif;
		   }
	   
	   h2
		   {
			   font-family: 'Sofia', cursive;
			   color:#24305e;
		   }
	   </style>
   </head>
	<body bgcolor="#a8d0e6">
		<?php
if(isset($_SESSION["log"]) && ($_SESSION["log"]==1))
{
	$id = $_SESSION['userID'];
    $name=$_SESSION['userName'];
	?>
   <br>
      <div class="col-sm-6"> 
        <form name="myForm" onsubmit="return validateForm()" action="#" method="POST";>
        <center><br><br>
			<script>alert("Enter Ctrl+P to print");</script>
			<h2>BIBLIOPHILE  LIBRARY</h2>
            <h3> No.5, JALAN MAHMOOD, 15200 KOTA BHARU,KELANTAN</h3>
            <h3>TEL :  09-7632189</h3></font><br>
            <label class="col-sm-3">***************************************************************</label>
            <h3>RECEIPT BIBLIOPHILE LIBRARY</h3>
            <label class="col-sm-3">***************************************************************</label>
              <table border=0><tr> 
				  <?php
				$query = "SELECT * FROM receipt where userName='".$name."'";
				$result = mysqli_query($connect, $query) or die ("Query Fail");
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{ 
				?>
                   <tr> 
                  <td><label class="col-sm-3 " for="TITTLEBOOK">TITLE BOOK:</label></td>
					   <td><h4 class="text-info"><?php echo $row["name"]; ?></h4></td>
                  </tr>

                   <tr> 
                  <td><label class="col-sm-3">ISSUE DATE:</label></td>
                   <td><h4 class="text-info"> <?php echo $row["borrowDate"]; ?></h4></td>
                  </tr>
				  
				  
                   <tr> 
                  <td><label class="col-sm-3">BORROWER'S NAME:</label></td>
                   <td><h4 class="text-info"> <?php echo $row["userName"]; ?></h4></td>
                  </tr>
		
				  	<?php
					}
				}
			?>
		</table><label class="col-sm-3">***************************************************************</label>
		  <h3 align="center">Please Return This Book by 10 Days or else penalty will be given!</h3>
		  
     </form>
		  <?php
}
		?>
   </body>
	</div>
</html>

