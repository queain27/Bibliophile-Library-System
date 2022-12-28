<?php 
session_start();
 $connect = mysqli_connect("localhost", "root", "", "bibliophilelibrary");
?>

<!doctype html>
<html><head>
	<!-- Google Font -->
	   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Sofia&display=swap" rel="stylesheet">
  <div id="divToPrint">
  <center><div class="container" >
  <br></br></div></center>
  <br>
  <div class="col-md-2"></div>                 
  <div class="container">
<meta charset="utf-8">
<title>Book Return Receipt</title>
	 
	 <style>
	   
	   h2
		   {
			   font-family: 'Sofia', cursive;
			   color:#67a3d9;
		   }
	 body
		 {
			 background-color: #fbd2d7;
			 font-family: 'Quicksand', sans-serif;
		 }
	  
	 </style>
</head>
<body>  
<br><br>
<center><label class="col-sm-3">*********************************************************************</label>
	<h2>RETURN BOOK RECEIPT BY BIBLIOPHILE LIBRARY</h2>
<label class="col-sm-3">********************************************************************</label>
<?php
 echo "<table>";
	echo"<h4>NAME:";echo $_POST['user_name'];"</h4>";
	echo"<br/>";
    echo"<h4>BOOK TITLE:";echo $_POST['title'];"</h4>";
	echo"<br/>";
    echo"<h4>";echo $_POST['title2'];"</h4>";
    echo"<br/>";
    echo"<h4>";echo $_POST['title3'];"</h4>";
	echo"<br/>";
    echo"<h4>";echo $_POST['title4'];"</h4>";
 
      echo"<br/>";
    echo"<h4>ISSUE DATE:";echo $_POST['borrow_date'];"</h4>";
    echo"<br/>";
    echo"<h4>RETURN DATE:";echo $_POST['return_date'];"</h4>";

	echo "</table>";
	?>
<h3>Please keep this receipt</h3>
<label class="col-sm-3">********************************************************************</label></center>
    <center>
     <div class="hidden-print">
     <button type="button" class="btn btn-primary btn-lg" onclick="PrintDiv();">Print</button></center></div>
      </div><br>
</body>
</html>

<script type="text/javascript">     
    function PrintDiv() 
    { var divToPrint = document.getElementById('divToPrint');
     var popupWin = window.open('', '_blank', 'width=300,height=300');
     popupWin.document.open();
     popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
      popupWin.document.close();
            }
 </script>
 