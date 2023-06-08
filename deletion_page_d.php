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
    <a href="application.html">Applications</a>
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
  #div1,#div2{
    font-size: 35px;
    display: flex;
  }
  .boxedItem{
    width: 5em;
    height:2em;
    box-shadow:3px 3px 10px green;
    border: 2px;
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
<a href="loginmodal.php" style="float:left" >Take Quiz</a>
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
          <h2>Deletion in Array- an element at the beginning of the array:</h2>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we have to move all the elements one position forward to fill the position of the element at the beginningof array. Though the deletion process is not difficult but moving all elements one position forward involve movement of all the existing elements except the one being deleted. This is the worst case scenario in deletion in a linear array.
          
          In the example array elements from index 1 to index 8 have to moved one position forwards so that the first element is replaced by second, second by third and so on<br>
          <br>

          <h2>Deletion in Array – an element at the end of the array:</h2>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we don’t have to move any elements since the action here will be just removing the last element. This is done by redefining the index of last element of linear array = N-1.  This is the best case scenario in deletion in a linear array.

          In the example array no elements are moved. The last element is removed by setting the index of last element as 7<br>
          <br>
          <h2>Deletion in Array – an element at the give position J:</h2>
          Let J be any location in the array for one existing element. We have to delete the element at J position. To do this starting from J every element is moved one place forward so that the element after index J comes to position of Jth element. This is the average case scenario in deletion in  linear array.

          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn the example array ,elements from index J (4) to index 8 have to moved one position forward so that an element at index 4 is replaced by element at index 5. Similarly element at 6th postion comes at 5th position, element at 7th position comes at 6th position and element at 8th position replaces element at 7th position completing the deletion process<br><br>
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

            function shift_first()
            {
              scripts.shift();
              update();
              document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});
            }
            function pop_last() {
                scripts.pop();
                update();
                document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});
            }            
            function index_ele()
            {
            var index_no =document.getElementById("del1").value;
            delete scripts[index_no]; 
            update();
            document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});
            }
            function element()
            {
                delete scripts[scripts.indexOf(document.getElementById("del2").value)]; 
                update();
                document.getElementById('div1').scrollIntoView({
  behavior: 'smooth'
});
             }
             function refreshpage()
            {
               window.location.reload();
             }
            
            </script>
            <h2>To display the elements inserted previously in the insertion page</h2>
            <input type="submit" id="filldetails" id="submit" value ="DISPLAY" onclick="update1()">
            <div id="div2" style="font-size: 35px;"></div>
            <h2>DELETE THE FIRST ELEMENT OF THE ARRAY....</h2>
            <input type="submit" id="filldetails" id="submit" value ="Delete the item" onclick="shift_first()">
            <h2>DELETE THE LAST ELEMENT OF THE ARRAY....</h2>
    
            <input type="submit" id="filldetails" id="submit" value ="Delete the item" onclick="pop_last()"><br><br>
            <h2>DELETE ARRAY ELEMENT USING ARRAY INDEX....</h2>
            <input id="del1" placeholder="Enter the index of array">
            <br><br>
            <input type="submit" id="filldetails" id="submit" value ="Delete the item" onclick="index_ele()"><br><br>
            <h2>DELETE ARRAY ELEMENT USING ARRAY ELEMENT DATA....</h2>
            <input id="del2" placeholder="Enter the array element ">
            <br><br>
            <input type="submit" id="filldetails" id="submit" value ="Delete the item" onclick="element()"><br><br>

            <div id="div1" style="font-size: 35px;"></div><br><br><br>
            <button type="reload" onclick="refreshpage()">refresh page</button>
            
            
            
           
        

            <div class="footer">
  <h3></b></h3>
  <h4></h4>
</div>

</body>
</html>


