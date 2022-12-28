<?php
session_start();
if($_SESSION["Login"]==1)   /*login 1-user */
{
	unset($_SESSION['userID']);
	unset($_SESSION['userName']);
	unset($_SESSION['userPass']);
}
else
{
	unset($_SESSION['adminID']);
	unset($_SESSION['adminName']);
}
//unset($_SESSION['log']);
session_destroy();
header ("Location:Login.php");
exit();
?>
