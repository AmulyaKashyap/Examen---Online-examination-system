<!DOCTYPE html>
<html>
<head>
<title>Examen Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel= "icon" href="logo1.png" type="image/x-icon">
    <style>
        .head1{
            font-family: 'Sofia';font-size: 2vw;
         }
        </style>
</head>
<body>
    <?php
include("config.php");
session_start(); 
extract($_POST);
$rs="select * from stlogin where username='$user'";
$result = mysqli_query($con, $rs);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
     if ($count>0)
        {
            echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
            exit;
        }
$sql = "INSERT INTO `stlogin`(`id`, `username`, `passcode`, `course`, `dob`, `phone`, `email`) VALUES ($userid,'$user','$pass','$course','$dob',$phone,'$email')";
mysqli_query($con, $sql)or die("error");
echo "<br><br><br><div class=head1>Your Login ID  $user Created Sucessfully</div>";
echo "<br><div class=head1>Please Go Back And Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.html>Click here</a></div>";
?>
</body>
</html>
  