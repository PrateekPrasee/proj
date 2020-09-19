<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:login.php');
}

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizdbase');

?>


<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <title>Way To Quiz</title> 
  
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="style4.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head> 
  
<body>
  
   <div class="container">
  <br>
   <button class='btn btn-success pull-right' onClick="location.href='logins.php'"> LOGIN / SIGNUP </button>
      

  <h1 style="text-align:left; position:relative;font-family:Lucida Handwriting;"><b>ARYABHATA</h1></b>

   <h4 style="position:relative; top:-1px;font-family:Lucida Handwriting;"><u>OTP: Online Test PLatform</h4></u>
   
   <h5 style="font-family: Copperplate Gothic Light; font-size: 400%; margin: 40px">NAMASTE: <?php echo $_SESSION['username']; ?></h5><br><br>
   <h5 style="font-size: 250%; margin-top: -28px">🙏</h5>
   
     <div class="w3-container w3-left w3-animate-left">
    <br><br><a href= "quiz.php" target="_blank" style="margin-left: 495px; ">DS Quiz</a>
     
    <br><br>
    </div>
      <div class="w3-container w3-left w3-animate-right">
    <a href= "quiz.php" target="_blank" style="margin-left: 495px">COA Quiz</a>
     
    <br><br>
     </div>
      <div class="w3-container w3-left w3-animate-left">
    <a href= "quiz/quizcss.php" target="_blank" style="margin-left: 495px; ">CSS Quiz</a>
    <br><br>
      </div>
    
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
     <br><br>
    <br><br>
    <br><br>
    <p style="text-align: center; color: orange; font-size: 120%; margin-left: 48px; font-family: Californian FB"><i>©Aryabhata_</i><b>2020</b></p>
 
   </div>
  </body>
</html>
