<head>
<?php 
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");

?>
	<style>
	body
{  
   background-position:center;
   box-sizing: border-box;
  background-color: rgb(238,174,202);
 background: linear-gradient(90deg, rgba(238,174,202,1) 5%, rgba(148,187,233,1) 50%);

}
	
	
	
	</style>
</head>

<?php
	if(isset($_GET['userID']))
	{
		$userID = $_GET['userID'];

		$sql = "SELECT * FROM user WHERE userID = '".$userID."'";
		$qury = mysqli_query($connect,$sql) or die(mysqli_error());
		$data = mysqli_fetch_array($qury);

		?>
<body><center>
<h4> User Information </h4>
		<form id="form1" name="form1" method="post" action="deleteuserEngine.php">
		  <table width="635" border="1">
			<tr>
			  <td width="92">User ID</td>
			  <td width="527"><?php echo $userID ?>
			<input type="hidden" name="txtuserID" id="txtuserID"  value="<?php echo $userID ?>"/></td>
			</tr>
			<tr>
			  <td>User Name</td>
			  <td><?php echo $data["userName"]?></td>
			</tr>
			<tr>                                                  
			  <td>Password</td>
			  <td><?php echo $data["userPass"]?></td>
			</tr>
			<tr>
			  <td>Date</td>
			  <td><?php echo $data["dateCreated"]?></td>
			</tr>
			<tr>
			  <td colspan="2"><input type="submit" name="Send" id="Send" value="DELETE" />
			</tr>
		  </table>
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
	
		<center> <form action="adminview.php">
         <button class="btn">Menu</button>
        </form>
		</form>
<?php
	}
	else
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=displayInfo.php\"/>";
//}
//else
	//echo "<meta http-equiv=\"refresh\" content=\"2;URL=../logInForm.php\"/>";
?>
			</center>
</body>
</html>