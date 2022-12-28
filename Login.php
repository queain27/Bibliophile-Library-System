<?php 
session_start();
include "connection.php";
  $connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
/* admin sahaja */

	if(isset($_POST['userid'])&& isset($_POST['password']))
		{
			function validate($data)
			{
				$data = trim($data);
				$data = stripcslashes($data);
				$data =htmlspecialchars($data);
				return $data;
			}
			$userid= validate($_POST['userid']);
			$password=validate($_POST['password']);

		if (empty($userid))
			{ header("Location:adminLogin.php?error=User Name is required");
			 exit();
  			}
   		else if(empty($password))
		{
			header("Location:adminLogin.php?error=Password is required");
			exit();
		}
	   else 
   		{ $sql ="SELECT * FROM admin WHERE adminID='$userid' AND adminPass='$password'";
     
		  $result =mysqli_query($connect,$sql);
   
   			if(mysqli_num_rows($result)===1)
   			{  
       		$row=mysqli_fetch_assoc($result);
				if ($row['adminID'] ===$userid && $row['adminPass']===$password)
	 		{ $_SESSION['adminID'] =$row['userid'];
	   		  $_SESSION['adminName'] =$row['name'];
			 $_SESSION['adminPass'] =$row['password'];
  
			 	header("Location: adminMainPage.php");
     			exit();
	 }
	 else
     { header("Location: adminLogin.php\?error=Incorrect username or password");
     exit();
      }
   
   }
   }
} 

else if(isset($_POST['iduser']) && isset($_POST['passUser']))
/* for user */
$username = $_POST["iduser"];  //based on login user
$psswd = $_POST["passUser"];
$query = "SELECT * FROM user WHERE userID = '".$username."' AND userPass = '".$psswd."'";

$result = mysqli_query($connect,$query);
$numRow = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($numRow == 0)//for failed
{ echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\"/>";
    echo "<script>'The user is not exist'</script>";
}
else  //failed
{
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=Bookview.php\"/>";
		$_SESSION["userID"]=$row["userID"];
	    $_SESSION["userPass"]=$row["passUser"];
		$_SESSION["userName"]=$row["userName"];
		$_SESSION["log"] = 1;
  		header("Location: Bookview.php");
  
}

?>

