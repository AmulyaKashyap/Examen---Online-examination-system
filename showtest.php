<?php

include("header.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Quiz - Test List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel= "icon" href="logo1.png" type="image/x-icon">
<style>
      .headI {
		  font-family: 'Sofia';font-size: 2vw;
		  text-align:center;
	  }
	  </style>
</head>
<body>
<?php

extract($_GET);
$rs1=mysqli_query($con,"select * from mst_subject where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
echo "<h1 align=center class='headIt'><font color=blue size=10><b> $row1[1]</b></font></h1>";
$rs=mysqli_query($con,"select * from mst_test where sub_id=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=headI> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=headI> <u><b>Select Topic Name to Give Test :-</u></b> </h2>";
echo "<table align=center>";

while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td class=headI ><a href=quiz.php?testid=$row[0]&subid=$subid>$row[2]</a>";
}
echo "</table>";
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--Last-->
<?php
include("footer.php");
?> 
<script src="js/jquery-3.5.1.js"></script>
<!--cnd used to include popper.js file means dropdown will work only online-->   
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
