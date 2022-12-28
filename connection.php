<!-- Connection for PHP -->
<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$databaseName = "bibliophilelibrary"; 
$connect = new mysqli($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
$mysqli_select_db = mysqli_select_db($connect, "bibliophilelibrary");
?>