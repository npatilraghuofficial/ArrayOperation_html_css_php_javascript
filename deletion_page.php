<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" type="text/css" href="dynamic_input_deletion.css">

</head>
<body>

<div id="header">
  <h1 style="text-align: center;font-size: 50px;">Array Extraction(Deletion)</h1>
</div>


  <div class="topnav" style="width: 100%;">
    <a href="applications.html">Applications</a>
   <a href="deletion_page.php"  active id="active">Extraction</a>
   <a href="insertion.php">Insertion</a>
   <a href="home.php">Home</a>
   <a href="aboutus.html"  >About-Us</a>

 
 
   <style>#active{
    background-color: #ddd;
    color: black;
  }</style>
<a href="deletion_modal.html"> sample Extraction Animation</a>

<style>



.button {
  display: inline-block;
  padding: 0.75rem 1.25rem;
  border-radius: 10rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  letter-spacing: 0.15rem;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  cursor: pointer;
}
.button:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: black;
  border-radius: 10rem;
  z-index: -2;
  cursor: pointer;
}
.button:before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #777;
  transition: all 0.3s;
  border-radius: 10rem;
  z-index: -1;
  cursor: pointer;
}
.button:hover {
  color: #fff;
  cursor: pointer;
}
.button:hover:before {
  width: 100%;
  cursor: pointer;
}

/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}

.container {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}

h1 {
  text-transform: uppercase;
  font-size: 0.8rem;
  margin-bottom: 2rem;
  color: #777;
}

span {
  display: block;
  margin-top: 2rem;
  font-size: 0.7rem;
  color: #777;
}
span a {
  font-size: 0.7rem;
  color: #999;
  text-decoration: underline;
  cursor: pointer;
}



  
    .container{
        display: flex;
        float:left;
        display: inline-block;
        position: relative;
        
    }
  #heading {
    font-family: myFirstFont;
    margin-top: 10px;
      padding: 1px;
      text-align: center;
      background: black;
      color: white;
      font-size: 50px;
      width: 100%;
  }
  #brief {
      color: rgb(7, 5, 5);
      font-size: 24px;
  }
  #para1{
      font-size: 17px;
      line-height: 30px;
  }
  table{
      font-size: 25px;
      color: black;
  }
  input{
      height: 50px;
      
  }
  .newDiv{

    display: flex;
    position: relative;
  }
  .address{
      border:groove;
  }
  div{
display: inline-block;
  }
  #div1,#div2,#div3,#div4,#div5{
    font-size: 35px;
    display: flex;
    cursor: pointer;
  }
  .boxedItem{
    text-align: center;
    width: 100px;
    height:100px;
    box-shadow:3px 3px 10px green;
    border: 2px;
    border-radius: 20px;
    padding:30px;
    margin:10px;
    float:left;
    border:5px;background-color: yellowgreen;
   
 
    animation:scale 2s ease-in-out ;   
    animation-fill-mode: backwards;

    animation-duration: 2.5s;
  }

  .boxAnime{
    animation-name: anime;
    animation-duration: 1000ms;
    transition: 1s;
  }
  .hiddenimg {
  display: none;
}

.hiddentxt {
  font-weight: bold;
  color: #F00;
  z-index:99;
  
}

.hiddentxt a {
  color: #F00;
  text-decoration: none;
  z-index: 99;
}
.hiddentxt:hover ~ .hiddenimg {
  display: block;
  position: relative;
    z-index: 2
}
/*.image:hover{
  width: 70%;
  height: 450px;
}*/

  @keyframes anime {
    0%{transform: scale(0.1);
        background-color:red ;}
        100%{transform: scale(1);
            background-color:greenyellow;}
  }
  
  
</style>
<a href="quiz.php" style="float:left" >Take Quiz</a>
</div>
<style>
#del1,#del2,#del3,#del4,#del5{


width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
} 


input[type=text], input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}</style>

      
    <div class="card">
        <p id="para">
          <h2>Deletion in Array- an element at the 1st position(0th Index) of the array:</h2>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we have to move all the elements one position forward to fill the position of the element at the beginning of array. Though the deletion process is not difficult but moving all elements one position forward involve movement of all the existing elements except the one being deleted. This is the worst case scenario in deletion in a linear array.
          
          <br>
          <img src="deletion1.png" width="50%" height="auto">
            <img src="deletion2.png" width="50%" height="auto" style="float:right;">
            <br>
            <p style="text-align:center"><img src="deletion3.png" width="50%" height="auto"></p>
          <br>

          <h2>Deletion in Array – removing the last element of the array:</h2>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we don’t have to move any elements since the action here will be just removing the last element. This is done by redefining the index of last element of linear array = N-1.  This is the best case scenario in deletion in a linear array.

          <br>
          <img src="deletion4.png" width="50%" height="auto">
            <img src="deletion5.png" width="50%" height="auto" style="float:right;">
            <br>
            <p style="text-align:center"><img src="deletion6.png" width="50%" height="auto"></p>
          <br>
          <h2>Deletion in Array – an element at the give position i:</h2>
          Let i be any location in the array for one existing element. We have to delete the element at i position. To do this starting from i every element is moved one place forward so that the element after index i comes to position of ith element. This is the average case scenario in deletion in linear array.

          <br>
          <img src="deletion7.png" width="50%" height="auto">
            <img src="deletion8.png" width="50%" height="auto" style="float:right;">
            <br>
            <p style="text-align:center"><img src="deletion9.png" width="50%" height="auto"></p>
          <br>
        </p>
        <p><h2>To view the algorithm of extraction place your mouse over the text below</h2></p>
        <div class="image" style="text-align: center; font-size: 20px; width: 100%;"><p>
          <span class="hiddentxt"><a href="extraction_algorithm.png">ALGORITHM OF EXTRACTION</a></span><span class="hiddenimg"><img src="extraction_algorithm.png" width="60%" height="auto" /></span>
        </p></div><br>
        <div id="heading">ARRAY EXTRACTION</div>
        <hr>
        
        
        <script>
         <?php
           include("db_link_pesu.php");
           error_reporting(0);
           session_start();
            $projects = array();
            $sql="SELECT IndexNumber,value FROM array_elements";
            $records = mysqli_query($conn,$sql) ;
            while (  $row =  mysqli_fetch_array($records)    )
                      {
                          $projects[]=$row['value'];
                      }
                      
      ?>
      
      var scripts = new Array();
    <?php 
     foreach($projects as $key => $value){ 
    ?>
    scripts.push('<?php echo $value; ?>');
    <?php } ?>

          function update(){
            document.getElementById("div1").innerHTML=("<div class='boxedItem'>"+scripts.join("</div><br><div class='boxedItem'>")+"</div>");
            var x = Array(...document.getElementsByClassName("boxedItem"))
            x.forEach((e)=>e.className+=" boxAnime")
          }
          function update1(){
            document.getElementById("div2").innerHTML=("<div class='boxedItem'>"+scripts.join("</div><br><div class='boxedItem'>")+"</div>");
            var x = Array(...document.getElementsByClassName("boxedItem"))
            x.forEach((e)=>e.className+=" boxAnime")
          }


          function update3(){
            document.getElementById("div3").innerHTML=("<div class='boxedItem'>"+scripts.join("</div><br><div class='boxedItem'>")+"</div>");
            var x = Array(...document.getElementsByClassName("boxedItem"))
            x.forEach((e)=>e.className+=" boxAnime")
          }
          
          function update4(){
            document.getElementById("div4").innerHTML=("<div class='boxedItem'>"+scripts.join("</div><br><div class='boxedItem'>")+"</div>");
            var x = Array(...document.getElementsByClassName("boxedItem"))
            x.forEach((e)=>e.className+=" boxAnime")
          }

          function shift_first()
            {
              if(scripts.length==0)
              {
                alert("array has no more element to delete!!");
              }
              else
              {
              scripts.shift();
              update();
              document.getElementById('div2').scrollIntoView({
  behavior: 'smooth'
});}
            }
            function pop_last() {
              if(scripts.length==0)
              {
                alert("array has no more element to delete!!");
              }
              else{
                scripts.pop();
                update();
                document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});}
            }            
            function index_ele()
            {
            var index_no =document.getElementById("del1").value;
            
            if(index_no>=scripts.length)
            {
              alert("array index entered out of bound!!");
            }
            else{
            scripts.splice(index_no,1); 
            update3();
            document.getElementById('div2').scrollIntoView({
  behavior: 'smooth'
});}
            }
            function element()
            {
              var a=scripts.indexOf(document.getElementById("del2").value);
              if(a==-1)
              {
                alert("array has no such element as entered!!");
              }
              else{
                scripts.splice(scripts.indexOf(document.getElementById("del2").value),1); 
                update4();
                document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});}}
             function refreshpage()
            {
               window.location.reload();
             }
            
            </script>
            <h2>To display the elements inserted previously in the insertion page</h2>
            <center><a  class="button" onclick="update1()"> Display-Array</a>&nbsp;&nbsp<a  class="button" onclick="refreshpage()"> refresh page</a><br></center>
           
            <br>
            <hr>


            <div id="div2" style="font-size: 35px;"></div>

            <a  class="button" onclick="shift_first()"> DELETE THE FIRST ELEMENT OF THE ARRAY....</a>
  
            <a  class="button" onclick="pop_last()">DELETE THE LAST ELEMENT OF THE ARRAY....</a>
            <a  class="button" onclick="update()"> Display-Array</a>
<br>
            <div id="div1" style="font-size: 35px;"></div><br><br><br>
            <br><br>

<br><hr>
<br>





<h6><font color="green">if input not entered Then by default it will delete index  number <b>0</b>"</font></p>
<input id="del1" placeholder="Enter the index of array" required>
            <a  class="button" onclick="index_ele()">DELETE ARRAY ELEMENT USING ARRAY INDEX....</a>    <a  class="button" onclick="update3()"> Display-Array</a>

<div id="div3" style="font-size: 35px;"></div>

<br><br>
<hr>
<br><br>



<input id="del2" placeholder="Enter the array element " required>
            <br><br>
            <a  class="button" onclick="element()">DELETE ARRAY ELEMENT USING ARRAY ELEMENT DATA....</a>
            <a  class="button" onclick="update4()"> Display-Array</a>


            <div id="div4" style="font-size: 35px;"></div>

            
             

          
            
            
            
           
        

            <div class="footer">
  <h3></b></h3>
  <h4></h4>
</div>

</body>
</html>


