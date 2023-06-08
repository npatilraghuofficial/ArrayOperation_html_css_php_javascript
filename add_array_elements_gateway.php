<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
 echo $_SESSION['uname'];

 if($_POST['submit']){
    $index='0';
    $address='1000';
    $value='2';
    $query = "INSERT INTO array_elements VALUES ('','$index','$address','$val')";
    $data = mysqli_multi_query($conn, $query);
    echo $data;

    if($data){
        ?><script> alert("Array elements added")
        
        </script>;
        <?php 
     }else{
         ?><script> alert("sorry...error")
         <?php
      
     }
     
         }
     
      ?>
 }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" type="text/css" href="dynamic_input_insertion.css">

</head>
<body>
    <input type="text">hi
    <style>
        #size0,#size1,#size2,#size3,#size4,#size5,#size6,#size7,#size8{

            /* Full-width input fields */
 
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
} 


    /* Full-width input fields */
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

<div class="header">
  <h1 style="text-align: center;">Array Insertion</h1>
</div>

<div class="topnav">
   <a href="#">Application</a>
  <a href="#">Search</a>
  <a href="deletion_array.html">Extraction</a>
  <a href="#" active id="active">Insertion</a>
  <a href="home.html">Home</a>


   <style>#active{
    background-color: #ddd;
    color: black;
  }</style>



<a href="insertion_modal.html"> sample insertion Animation</a>
<style>

@keyframes size0_0{
    from{background-color: greenyellow;
    content-visibility: }
    to{background-color:antiquewhite;
        border-color: blueviolet ;
        border-radius: 2px;
        box-shadow: 2px;
    content:30px;
opacity:1}
    
}
@keyframes zero_child{
    from{background-color: lightgoldenrodyellow;
    content-visibility: none;}
    to{
    content:30px;
    animation-delay:2.5s;

opacity:1}
    
}
    @font-face {
        font-family: Georgia,serif;
        src: url(Rye-Regular.ttf);
        
    }
    @font-face {
        font-family: Verdana,san;
        src: url(Charm-Regular.ttf);
    }
    body{
        background-color: linear-gradient(to bottom, #ffffff 0%,#ccccff 100%);
    
    }
    #heading {
        font-family: myFirstFont;
        margin-top: 10PX;
        padding: 1px;
        text-align: center;
        background: black;
        color: white;
        font-size: 50px;
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
        font-family: mySecondFont;
        font-size: 25px;
        color: black;
    }
    input{
        height: 50px;
        
    }



    }

</style>


  <a href="#" style="float:left">Take Quiz</a>
</div>
      
    <div class="card">
      <p id="para">
        An element can be inserted in an array at any index but this index should be less than the length of the array and the array should have the capacity/empty space to insert a new element.<br>
        Inserting can be done at any specified index by shifting all the elements from this index towards the right.


    </p>
    <img src="insertion_program.png" class="center">

    <div id="heading">ARRAY INSERTION</div>
    <hr>
    <div id="brief">BRIEF DISCRPTION:</div>
    <p id="para1">* THE BELOW ARRAY INSERTION EXAMPLE CAN HOLD 4 ELEMENTS SO IT IS DENOTED AS ARRAY[4].
        <br>
    * THE USER IS ALLOWED TO ENTER ONLY 4 ELEMENTS IN THE ORDER GIVEN BELOW.<br>* INPUT BOX ONLY ACCEPTS NUMBER FORMAT.</p>
    <hr>

    <div id="main">
        Number of Elements: (max. 10) <input type="text" id="size" name="size" value="5">&nbsp<input type="button" id="filldetails"  VALUE ="Add Elements" onclick="elements()">
        <input type="submit" id="filldetails" id="submit" value ="Get output" onclick="addFields()">

       
            <div id="container"/>
            <div class="center"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                
        <script type='text/javascript'>
            function elements(){
                // Generate a dynamic number of inputs
                var number = document.getElementById("size").value;
                // Get the element where the inputs will be added to
                var container = document.getElementById("container");
                // Remove every children it had before
                while (container.hasChildNodes()) {
                    container.removeChild(container.lastChild);
                }
                for (i=0;i<number;i++){
                    // Append a node with a random text
        
                    container.appendChild(document.createElement("br"));
        
                    container.appendChild(document.createTextNode(" Enter Vlaue of 1st Element -->> Array[" + (i+1) + "]"));
        
                    // Create an <input> element, set its type and name attributes
                    var input = document.createElement("input");
                    input.type = "input";
                    input.name = "size" + i;
                    input.id = "size" + i;

                    input.classList.add('text');

                    



                     

                    
                    container.appendChild(input);
                    container.appendChild(document.createElement("br"));

                    // Append a line break 
                    container.appendChild(document.createElement("br"));
                   
                   
        
        
                }
                container.appendChild(document.createElement("br"));
        
                var a = document.createElement('a');
                var link = document.createTextNode("CLICK ME!!");
                a.appendChild(link);
                a.title = "this is link";
                a.href="add_array_elements_gateway.php";
                container.appendChild(a);



                    submit.type = "button";
                    submit.name = "submit";
                    submit.id = "submit"
                    submit.value = "insert"
                    container.appendChild(submit);



            }
            
        </script>

<script type='text/javascript'>
    function addFields(){
        // Generate a dynamic number of inputs
        var number = document.getElementById("size").value;
        // Get the element where the inputs will be added to
        var container = document.getElementById("container");

        // Remove every children it had before
        while (container.hasChildNodes()) {
            container.removeChild(container.lastChild);
        }
        for (i=0;i<number;i++){
            for (j=0;j<=i;j++){
            // Append a node with a random text

            // Create an <input> element, set its type and name attributes
                var newDiv = document.createElement("div");
                var childDiv = document.createElement("div");


                newDiv.type = "div";
                newDiv.name = "size" + i +'_'+ j;
                newDiv.id = "size" +i+ '_'+j;
                newDiv.value = "size" + i+'_' + j;
                newDiv.innerHTML= "s" + i+j


                newDiv.classList.add('div_shadow');
                console.log(newDiv.id) 


                container.appendChild(newDiv);
                container.appendChild(childDiv);
                childDiv.classList.add('childDiv');


            
                console.log(newDiv.id)



            // container.appendChild(document.createElement("br"));


            // Append a line break 
            // container.appendChild(document.createElement("br"));
            // container.appendChild(document.createTextNode("Array[" + (i+1) + "]"));

            }
             container.appendChild(document.createElement("br"));
             container.appendChild(document.createElement("br"));
             container.appendChild(document.createElement("br"));

             container.appendChild(document.createElement("br"));

             container.appendChild(document.createElement("br"));
             container.appendChild(document.createElement("br"));
             container.appendChild(document.createElement("br"));
             container.appendChild(document.createElement("br"));




             childDiv.innerHTML= ' &nbsp element @ inserted @ position inserted'

            
     }

 
     }
     container.appendChild(document.createElement("br"));

</script>
        
    </div>
  

<div class="footer">this is footer</footer>

  <h3><b>Terms of Use  Privacy-Policy  Reschedule-Policy</b></h3>
  <h4>Copyright 2022-2032 by Team-A. All Rights Reserved</h4>
</div>

</body>
</html>


