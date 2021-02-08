<?php
include('header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Examen-practice</title>
    <style>
      
	  .contents{
	  font-family:'Sofia';font-size: 2vw;
	  }
	  
	  /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.contents {height: 900px}
    
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

<!-----Side navigation--->
 <div class="contents">
  <div class="row contents">
    <div class="col-sm-3 sidenav">
      <h4></h4>
      <ul class="nav nav-pills nav-stacked">
	  
        <li class="active" ><a href="#section1"><b><h1>Computer Concepts Tutorial</b></a></li><br>
		
	  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

     <ul id="myUL">
        <br><u><li><a href="#">Computer Course Concepts</u></a></li>
		    <br><li><u><a href="p2.php">Introduction to Computer</u></a></li>
		    <br><li><u><a href="p3.php">Introduction to OS 
		 </a></li></u>
		 <br><li><u><a href="p4.php">Word Processing</a></li></u>
         <br><li><u><a href="p5.php">Spread Sheet</a></li></u>
         <br><li><u><a href="p6.php">Introduction to Internet</U></a></li>
		 <br><li><a href="p7.php"><u>Keyboard Shortcut</u></a></li><br><br>
		</ul><br>
     </div>


<!--Search Box Function Definition-->	 
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

	 
	 
	 
<!---Content area--->	 
	  <div class="col-sm-9">
      
      <hr>
	 <center> <u><h1>Computer Concepts Tutorial</h1></center></u>
     <p>
	  Course on Computer Concepts is a basic tutorial on computer literacy. This tutorial enables the learner to use computer for basic things like sending and receiving emails, browsing internet, preparing databases, making presentations, etc. This course also helps to prepare candidates for NIELIT CCC examination.
<br>
<b><center>Audience</center></b><br>
This tutorial is designed on Course on Computer Concepts (CCC) which covers the entire updated syllabus prescribed by NIELIT. It comprises eight chapters on the fundamental concepts of computer. Each chapter provides clear idea of computer concepts in detail with the help of real time applications and screenshots. The language used in the entire tutorial is quite simple and easy to understand. The tutorial starts with basic concepts of computer and then explains about Microsoft Word, Excel and PowerPoint of MS office 2013 version. In the fifth and sixth chapters, it covers knowledge about Internet usage in our day-to-day life. The application of digital financial services is discussed in the last chapter which describes the usage of internet facility in financial sectors. So anyone who wants to get basic to intermediate level knowledge on the above topics are the targeted audience for this tutorial.<br>

<b><center>Prerequisites</center></b><br>
To be able to follow this tutorial, you do not need any prior knowledge on computers. It is a basic course which starts from the fundamentals. One having basic knowledge and understanding of English language can easily complete this tutorial.
	  </p>
	  
	  
               

 <!--Next and previous navigation button-->
  <center><a href="p7.html" class="btn btn-info" role="button">Previous</a>
   <a href="p2.html" class="btn btn-info" role="button">Next</a></center>
  </p>
  
</div>


      
<!--Last-->
 <?php
include("footer.php");
 ?>



 </body>
 </html>