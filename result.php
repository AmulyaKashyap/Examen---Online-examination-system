<?php

include("header.php");

?>
<!DOCTYPE html >
<html>
<head>
<title>Examen  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
<link rel= "icon" href="p1.jpeg" type="image/x-icon">
<style>
	.HotText {
  font-family: 'Sofia';font-size: 4vw;
text-align:center;
color:#DC143C;
  }
</style>

</head>

<body>
<?php

extract($_SESSION);
//Getting data from table
$rs=mysqli_query($con,"select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$user'") or die(mysqli_error());
echo "<h1 class=HotText><u> Reports Of All Given Tests</u> </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=HotText> You have not given any quiz !!</h1>";
	exit;
}


echo "<table class='table table-striped'><thead class='thead-dark'> <tr><th scope='col'>#</th><th scope='col'>Test Name</th><th scope='col'>Total Ques.</th><th scope='col'>Score</th><th scope='col'>Date</th></tr></thead><tbody>";
while($row=mysqli_fetch_row($rs))
{static $i=1;
echo "<tr>
<th scope='row'>$i</th><td>$row[0] <td > $row[1] <td > $row[3] <td> $row[2] </tr>";
$i++;
}
echo "</tbody></table>";
//Footer area
include("footer.php");
?>
</body>
</html>
