<html>
<head>
<?php 
session_start();
include "connection.php";
$connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
?>
</head>

<?php
    if(isset($_GET['bookid']))
	{
		$bookID = $_GET['bookid'];

		$sql = "SELECT * FROM book WHERE id = '".$bookID."'";
		$query = mysqli_query($connect,$sql) or die("Fail");
		$data = mysqli_fetch_array($query);

		?>
		
		<form id="form1" name="form1" method="post" action="DeleteBookEngine.php">
		  <table width="635" border="1">
			<tr>
			  <td width="92">ID</td>
			  <td width="527"><?php echo $data["id"];?>
			  <input type="hidden" name="txtbookid" id="txtbookid" value="<?php echo $data["id"]; ?>"/></td>
			
			</tr>
			<tr>
			  <td>Title</td>
			  <td>
			  <?php echo $data["name"]; ?></td>
			</tr>
			<tr>
			  <td>Author</td>
			  <td><?php echo $data["author"]; ?></td>
			</tr>
			<tr>
			  <td>ISBN</td>
			  <td><?php echo $data["isbn"]; ?></td>
			</tr>
			<tr>
			  <td>Publication</td>
			  <td><?php echo $data["publisher"]; ?></td>
			</tr>
			<tr>
			  <td>Publish date</td>
			  <td><?php echo $data["published_date"]; ?></td>
			</tr>
			<tr>
			  <td>Category</td>
			  <td><?php echo $data["category_id"]; ?>
			   <input type="hidden" name="txtcategory" id="txtcategory" value="<?php echo $data["category_id"]; ?>"/></td>
			</tr>
			<tr>
			  <td>Admin id</td>
			  <td><?php echo $data["adminID"]; ?></td>
			</tr>
		   
			
			  <td colspan="2"><input type="submit" name="Send" id="Send" value="DELETE"/>
			 
	
			</tr>
		  </table>
		  <p><a href="adminBookView.php">Back</a></p>
		</form>
		<?php
	}
	else
		header("Location:adminMainPage.php");
		?>