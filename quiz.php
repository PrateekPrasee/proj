<?php

session_start();
if(!isset($_SESSION['username']))
{
header('location:logins.php');
}

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizdbase');

?>


<!DOCTYPE html>

<html>
<head>
    <title>WELCOME TO QUIZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <canvas id="canvas" width=100" height="100"
  style="background-image: radial-gradient(circle, #347b6f, #2a7e7f, #29818f, #35829c, #4a82a6, #4c83a7, #4e83a8, #5084a9, #3f85a2, #358698, #34858b, #3b847e);">
  </canvas>

  <script>
  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  var radius = canvas.height / 2.2;
  ctx.translate(radius, radius);
  radius = radius * 0.90;
  setInterval(drawClock, 1000);

  function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
  }

  function drawFace(ctx, radius) {
   var grad;
   ctx.beginPath();
   ctx.arc(0, 0, radius, 0, 2*Math.PI);
   ctx.fillStyle = 'white';
   ctx.fill();
   grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
   grad.addColorStop(0, '#333');
   grad.addColorStop(0.5, 'white');
   grad.addColorStop(1, '#333');
   ctx.strokeStyle = grad;
   ctx.lineWidth = radius*0.1;
   ctx.stroke();
   ctx.beginPath();
   ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
   ctx.fillStyle = '#333';
   ctx.fill();
  }

  function drawNumbers(ctx, radius) {
   var ang;
   var num;
   ctx.font = radius*0.15 + "px arial";
   ctx.textBaseline="middle";
   ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
  }

  function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
  } 

   function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
  }
  </script>
  

<h5>WELCOME TO DS QUIZ: <?php echo $_SESSION['username']; ?></h5>


<div class="home-box custom-box">
    <h3><b>Instructions:</b> 👇</h3>
    <h4>1. There are <b>12 questions.</b></h4>
    <h4>2. Each questions contain <b>4 options.</b></h4>
    <h4>3. Each options has only <b>1 correct answer.</b></h4>
    <h4>4. There will be <b>No Negative Marking.</b></h4>
    _________________________________________________________________________________________________________
    <p>Total no. of questions: <span class="total-question-10"><b>12</b></span></p>
    <button type="button" class="btn" onclick="startQuiz()">Start Quiz</button><br><br>
    <p><b>All the Best!</b> 😉👍</p>
</div>


<div class="quiz-box custom-box hide">
    <div class="question-number">
      
    </div>
    <div class="question-text">
        
    </div>
    <div class="option-container">
      
    </div>

        <div class="next-question-btn">
         <button type="button" class="btn" onclick="next()">NEXT</button>
    </div>
    <div class="answers-indicator">
       
    </div>
</div>



<div class="result-box custom-box hide">
    <h1><u>Quiz Result</u></h1><br>
    <p>😍</p>
    <table>
        <tr>
            <td>Total Question</td>
            <td><span class="total-question"></span></td>
        </tr>
        <tr>
            <td>Attempt</td>
            <td><span class="total-attempt"></span></td>
        </tr>
        <tr>
            <td>Correct</td>
            <td><span class="total-correct"></span></td>
        </tr>
        <tr>
            <td>Wrong</td>
            <td><span class="total-wrong"></span></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><span class="percentage"></span></td>
        </tr>
        <tr>
            <td>Your Total Score</td>
            <td><span class="total-score"></span></td>
        </tr>
    </table>
    <button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
    <button type="button" class="btn" onClick="location.href='web2.php'">Log Out</button>
  
</div>
<p style="text-align: center; color: orange; font-size: 125%;  font-family: Californian FB;"><i>©Aryabhata_</i><b>2020</b></p>
<script src="question.js"></script>
<script src="app.js"></script>
</body>
</html>
