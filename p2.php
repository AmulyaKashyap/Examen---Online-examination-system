
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
    
<link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet'>
    
    <title>Examen-welcome</title>
    <style>
      .content {
          font-family: 'Sofia';font-size: 3vw;
          
      }
	  .contents{
	  font-family:'Sofia';font-size: 2vw;
	  }
	  
	  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.contents {height: 1200px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 650px) {
      .sidenav {
        height: auto;
        padding: 20px;
      }
      .row.contents {height: 600px;} 
    }
      </style>
</head>
<body>
 <!--navigation-->
  
 <div class="container" >
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex content" style="background-color: #04325e ;  " >
    <a class="navbar-brand" href="#">
      <img src="p1.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      Examen
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item ml-sm-5">
          <a class="nav-link" href="student.php">Overview
              <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ml-sm-2">
          <a class="nav-link" href="tests.php">Tests</a>
        </li>
        <li class="nav-item ml-sm-2 ">
            <a class="nav-link" href="reports.php">Reports</a>
          </li>
          <li class="nav-item ml-sm-2 ">
            <a class="nav-link" href="practice.php">Practice</a>
          </li>
        <li class="nav-item dropdown ml-sm-2  ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Call Us</a>
            <a class="dropdown-item" href="#">Mail Us</a>
          </div>
        </li>
        <li class="nav-item dropdown ml-sm-2 ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <?php

            echo $_SESSION["user"];
            ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.html">LogOut
            </a>
          </div>
        </li>
        
       
        </ul>
  </div>
</nav>
</div>

<br>
<br>

<!-----Content--->
 <div class="contents">
  <div class="row contents">
    <div class="col-sm-3 sidenav">
      <h4></h4>
      <ul class="nav nav-pills nav-stacked">
	  
        <br><li class="active"><a href="#section1"><b><h4 style="color:black;">Computer Concepts Tutorial</b></a></li><br>
		
	  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

     <ul id="myUL">
    <br><u><li><a href="practice.php">Computer Course Concepts</u></a></li>
		<br><li><u><a href="p2.php">Introduction to Computer</u></a></li>
		<br><li><u><a href="p3.php">Introduction to OS </a></li></u>
    <br><li><u><a href="p4.php">Word Processing</a></li></u>
		<br><li><u><a href="p5.php">Spread Sheet</a></li></u>
    <br><li><u><a href="p6.php">Introduction to Internet</U></a></li>
		<br><li><a href="p7.php"><u>Keyboard Shortcut</u></a></li>
		 <br><br>
		</ul><br>
     </div>
	 
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
 <div class="col-sm-9">
        <hr>
	 <center> <u><h2>Introduction to Computer</h2></center></u>
	 <b><h3>What is a Computer?</h3></b>
	Some people say that COMPUTER stands for<b> Common Operating Machine Purposely Used for Technological and Educational Research.</b> It is only a myth because first this definition does not make any sense and second when the computer were invented they were just calculating machines which needs a lot of space for establishment.</<br><br>
<b>A computer </b>is an electronic device that accepts data from the user, processes it, produces results, displays them to the users, and stores the results for future usage.
<br><br>
<b>Data </b>is a collection of unorganized facts & figures and does not provide any further information regarding patterns, context, etc. Hence data means "unstructured facts and figures".
<br><br>
<b>Information </b>is a structured data i.e. organized meaningful and processed data. To process the data and convert into information, a computer is used.<br><br>
<u><h3>Functions of Computers</h3></u>
<h4>A computer performs the following functions −</h4>
<b>Receiving Input</b>
Data is fed into computer through various input devices like keyboard, mouse, digital pens, etc. Input can also be fed through devices like CD-ROM, pen drive, scanner, etc.
<br><br>
<b>Processing the information</b>
Operations on the input data are carried out based on the instructions provided in the programs.
<br><br>
<b>Storing the information</b>
After processing, the information gets stored in the primary or secondary storage area.
<br><br>
<b>Producing output</b>
The processed information and other details are communicated to the outside world through output devices like monitor, printer, etc.
<br><br>
  <center><a href="p1.html" class="btn btn-info" role="button">Previous</a>
   <a href="p3.html" class="btn btn-info" role="button">Next</a></center>
  </p> 
</div>
<div id="last" class="container-flux last">
   
  <br>
  <div class="card-deck">
   <div class="card" style="color: #062644; background-color:rgb(107, 155, 201); border: none;">
     <img src="i2.jpg" class="card-img-top "style="width: 25%;
     border-radius: 50%;" alt="logo">
     <div class="card-body">
       <h3 style="font-family: 'Niconne';">
         Examen</h6>
       <p class="card-text">The all-in-one online exam platform for educators <br> students to improve learning outcomes.
            </div>
   </div>
   <div class="card"style="color: #062644; background-color:rgb(107, 155, 201); border: none;" >
     <img src="contact_icon.png" style="width: 5rem;"class="card-img-top" alt="...">
     <div class="card-body">
       <h5 class="card-title"><b>Contact Us</b></h5>
       <p class="card-text">Call us at:-6528978563</p>
       <p class="card-text">71817118199</p>
       <p class="card-text">Or Mail us at:-xyz@email.com</p>
       
       
       
       
     </div>
   </div>
   <div class="card" style="color: #062644; background-color:rgb(107, 155, 201); border: none;">
     <img src="anout.png" style="width: 5rem;"class="card-img-top">
     <div class="card-body">
       <h5 class="card-title"><b>Details:-</b></h5>
       <a href="#" style="color:crimson;cursor: pointer;">Privacy and policy</a><br>
       <a href="courses.html" style="color:crimson">Courses covered</a>
     </div>
   </div>
 </div>
</div>

 <script src="js/jquery-3.5.1.js"></script>
 <!--cnd used to include popper.js file means dropdown will work only online-->   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="js/bootstrap.js"></script>
 </body>
 </html>