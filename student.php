<?php
include('header.php');
include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel= "icon" href="logo1.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet'>
  <title>Examen-welcome</title>
    <style>
    #chart-container{
      width:640px;
      height:auto;
    }
      .content {
           font-family:'Great Vibes';
           font-size: 3vw;
      }
      </style>
</head>
<body t style="background-color: rgba(178, 212, 250, 0.452);">
  <div class=content>
<!--content-->
 <img src="logo1.png" style="display:inline-block; width:30%; height:auto; align:left;">
  <b>Welcome 
<?php
echo $_SESSION["user"];
?>
   , Keep Giving Test Regularly!!
    </b>
  </div>
<br>
<br>
<!--Last-->
<?php include('footer.php');?>

</body>
</html>