<?php
include("header.php");
?>

<!DOCTYPE html >
<html>
<head>
<title>Examen- Tests</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
<style>
	.HotText {
  font-family: 'Sofia';font-size: 4vw;
text-align:center;
color:#DC143C;
  }
  .content {
          font-family: 'Sofia';font-size: 3vw;
          color:blue;
              }
</style>
</head>
<body style="background-color: rgba(178, 212, 250, 0.452);">
<br><br><br>

<!--Content-->
<?php
echo "<h1 class='HotText'><b><u>Select Subject to Test :-</u></b></h1>";
$rs=mysqli_query($con,"select * from mst_subject");
echo "<table class='table table-striped'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center class=content ><a href=showtest.php?subid=$row[0]>$row[1]</a>";
}
echo "</table>";
?>

<!--Last-->
<?php
include("footer.php");
?>
 </body>
 </html>