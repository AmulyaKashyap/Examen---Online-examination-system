<?php
session_start();
error_reporting(1);
include("config.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: student.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Examen Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel= "icon" href="logo1.png" type="image/x-icon">
</head>
<body>
<?php
include("header.php");


//$query="select * from mst_question";

$rs=mysqli_query($con,"select * from mst_question where test_id=$tid",$cn) or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysqli_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	//inserting user answer in mst_useranswer table
				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])//checking answer
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;//increasing count of true answer
				}
				$_SESSION[qn]=$_SESSION[qn]+1;//increasing question count
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	//inserting user answer in mst_useranswer table
				mysqli_query($con,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1><u> Result</u></h1>";//Generating result
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
			//inserting result in result table
				mysqli_query($con,"insert into mst_result(login,test_id,test_date,score) values('$user','$tid',now(),'$_SESSION[trueans]')") or die(mysqli_error());
				//review Answers -After result all questions with answers are shown on same page.
				


				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysqli_query($con,"select * from mst_question where test_id=$tid",$cn) or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}


//showing test
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
//$topic=mysqli_query($con,"select test_name from mst_test where test_id=$tid");
echo "<br><br><form name=myfm method=post action=quiz.php>";
echo "<table width=80%> <tr> <td width=50>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td colspan='2'><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=options><input type=radio name=ans value=1>$row[3]";
echo "<td class=options> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=options><input type=radio name=ans value=3>$row[5]";
echo "<td class=options><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><input class=bu type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input class=bu type=submit name=submit value='Get Result'></form>";

echo "</table></table>";
?>
</body>
</html>