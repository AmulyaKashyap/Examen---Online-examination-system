<?php      
    include('config.php'); 
    session_start(); 
    $username = $_POST['uname'];  
    $password = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from stlogin where username = '$username' and passcode = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {
              
            $_SESSION["user"] = $username;
            $_SESSION["password"] =  $password;
         header("Location: http://localhost/Bootstrap1/student.php");
         exit; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 