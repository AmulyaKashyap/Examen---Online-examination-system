<?php
include('header.php'); 
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
    .row.contents {height: 2050px}
    
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
  
<br>

<!-----Dashboard--->
 

 
<div class="contents">
  <div class="row contents">
    <div class="col-sm-3 sidenav">
      <h4></h4>
      <ul class="nav nav-pills nav-stacked">
	  
        <br><li class="active"><a href="#section1"><b><h4 style="color:black;">Computer Concepts Tutorial</b></a></li><br>
		
	  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

     <ul id="myUL"><br><u><li><a href="practice.php">Computer Course Concepts</u></a></li>
		<br><li><u><a href="p2.php">Introduction to Computer</u></a></li>
		<br><li><u><a href="p3.php">Introduction to OS </a></li></u>
    <br><li><u><a href="p4.php">Word Processing</a></li></u>
		<br><li><u><a href="p5.php">Spread Sheet</a></li></u>
    <br><li><u><a href="p6.php">Introduction to Internet</U></a></li>
		<br><li><a href="p7.php"><u>Keyboard Shortcut</u></a></li><br><br>
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
	 <center> <u><h2>Computer Keyboard Shortcut</h2></center></u>
	 <br>
	 <center><img src="key1.jpg"></center>
	  <center><img src="key2.jpg"></center>
	  <center><img src="key3.jpg"></center>
	  <center><img src="key2.jpg"></center>
	  <br>
	  <br>
 
  <center><a href="p6.html" class="btn btn-info" role="button">Previous</a>
   <a href="practice.php" class="btn btn-info" role="button">Next</a></center>
  </p>
  
</div>
      
        <!--Last-->
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