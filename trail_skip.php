<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
$_SESSION['uname'];

$_SESSION['uname2'];
if(isset($_SESSION['uname'])){
    $query ="SELECT * FROM register where email=.'$uname'. or phonenumber=.'$uname'.";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total !== 0 )
    {
        
      
             if($result = mysqli_fetch_assoc($data))
                 {
                  $uname2=$result['username'];
                  $password=$result['password'];
                  
                  $_SESSION['uname2']=$uname2;
                  $_SESSION['password']=$password;
                 }
                }}
    ?>
    


<!DOCTYPE html>
<html>
<head>
    <head>
        <link rel="stylesheet" href="home.css"><?php
        echo"<center><font color=black><h1>welcome</font><font color=green> $_SESSION[uname];</font></h2><center>"; 
      ?>
     
  <link rel="stylesheet" href="quiz.css">
  <h3>Quiz on Array Operations</h3>
</head>
<body onload="NextQuestion(0)">

<div id="MyClockDisplay" class="clock"></div>

    <script type="text/javascript">
                    function showTime()
                    {
                    var date = new Date();
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session="AM";
                    if(h==0){
                        h=12;
                    }
                    if(h>12){
                        h=h-12;
                        session="PM";
                         }
                    h = (h < 10) ? "0" + h : h;
                    m = (m < 10) ? "0" + m : m;
                    s = (s < 10) ? "0" + s : s;

                       
                    var time= h + ":" + m + ":" + s + "" + "_"+ session;
                    document.getElementById("MyClockDisplay").innerText = time;
                    document.getElementById("MyClockDisplay").innerContex = time;

                    setTimeout(showTime,1000);
                    }
                    showTime();
                   
  </script>
    <main>
       
        <div class="modal-container" id="score-modal">
<style>

    #cert{
        background-color: #ffffff;
    }

   
}
</style>
            <div class="modal-content-container">
            <div class="container">
        <div class="tabs-container">
   
            <div id="cert" style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #000000">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #000000">
       <span style="font-size:50px; font-weight:bold; color:orange">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px ;color:#000000"><i>This is to certify that</i></span>
       <br><br>
       <?php
      ?>
       <span style="font-size:30px ;color:green" ><b><?php  echo "$_SESSION[uname]" ?></b></span><br/><br/>
       <span style="font-size:25px;color:#000000""><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px;color:#000000"">Array Operations</span> <br/><br/>
       <span style="font-size:20px;color:#000000"">with score of <b><p>Percentage : </span><span id="grade-percentage"></span>%</b></p>
 <br/><br/><br/><br/>
       <span style="font-size:25px;color:#000000""><i>dated</i></span><br>
       <span id="datetime" style="color:#000000"></span></font>
      <span style="font-size:30px;color:#000000"></span>
</div>
</div>
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
    </script>
    <h1>Congratulations, Quiz Completed.</h1><br>
                <div class="grade-details">
                    <p>Attempts : 10</p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p ><span id="remarks"></span></p>
                </div>
                <br>

                <div class="modal-button-container">
                    <button onclick="window.print()">Print Certificate</button>
                </div>

            </div>
        </div>
</div>

 <!-- Some content here -->
 </div>

        <div class="game-quiz-container">

            <div class="game-details-container">
                <h1>Score : <span id="player-score"></span> / 10</h1>
                <h1> Question : <span id="question-number"></span> / 10</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">

               <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                         <h1>Please Pick An Option</h1>

                         <div class="modal-button-container">
                         <button  onclick="nextquestion()">Skip Question</button>

                            <button onclick="closeOptionModal()">Back to Quiz</button>
                        </div>

                    </div>

               </div>

                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next</button>
            </div>

        </div>
    </main>
    <script src="quiz.js"></script>
    
</body>
</html>

