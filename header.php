<?php
include('config.php'); 
session_start(); 
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
    
    <style>
      .content {
          font-family: 'Sofia';font-size: 3vw;
          
      }
      .but1{
        width: 100%;
        height:auto;
        padding: 10px 18px;
        background-color: #4d79ff;
      }
      </style>
</head>
<body style="background-color: rgba(178, 212, 250, 0.452);">
  <!--navigation-->
  
  <div class="container" >
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex content" style="background-color: #04325e ;  " >
        <a class="navbar-brand" href="#">
          <img src="logo9.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
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
                <a class="nav-link" href="result.php">Reports</a>
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
                <button class=but1 onclick="logout()">LogOut</button>
              </div>
            </li>
            
           
            </ul>
      </div>
    </nav>
  </div>
<br>
<br>
<br>

<script>
  function logout(){
    if(confirm("Do you want to log out ?")){
location.replace("http://localhost/Bootstrap1/")

    }
   }
  </script>


 <script src="js/jquery-3.5.1.js"></script>
 <!--cnd used to include popper.js file means dropdown will work only online-->   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="js/bootstrap.js"></script>
 </body>
 </html>