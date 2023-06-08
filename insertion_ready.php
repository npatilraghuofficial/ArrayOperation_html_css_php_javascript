<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
 
 $size=$_POST['size'];
 echo $size;
 $size=$_SESSION['size'];
 if(isset($_POST['submit']))
{
    

    $size=$_POST['size'];
    for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){
        $element = $_POST[1000+$y];
        $address = 1000+($y);
        $MyArray=array($address=>$element);
        foreach ($MyArray as $x=>$x_value)
        {
            echo "address = " .$x. "value= " .$x_value;
            echo"<br>";
     
        }
       
    }
    for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){

   
    }



?><script>alert("in")</script><?php

    // foreach ($MyArray as $x=>$x_value)
    // {
    //     echo "address = " .$x. "value= " .$x_value;
    //     echo"<br>";

    // }

for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){
    $size=$_POST['size'];
    $value=$_POST['100'.+$x];
    $address=1000+$x;
    $index_ = $x;

    $query = "INSERT INTO array_elements VALUES ('$size','','$index_','$address','$value')";
    $data = mysqli_query($conn, $query);
}
   if($data)
    {
       
        ?>script> alert("success data inserted!!!")</script><?php
       
        header ( "refresh:0.1; url=display_array_after_insertion.php" );

    
    }
    else{
        ?><script> alert("cannot add!!!Array elements already present//");
        alert(typeof(number));

</script>;<?php
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" type="text/css" href="dynamic_input_insertion.css">
<input type="text" id="trail" name="trail" value=2>trail


<script>
function add(){
var ele0 = document.getElementById('size0').value;
var ele1 = document.getElementById('size1').value;
var ele2 = document.getElementById('size2').value;

var ele3 = document.getElementById('size3').value;

var ele4 = document.getElementById('size4').value;


}
</script>



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
        Number of Elements: (max. 10) <input type="text" id="size" name="size" value="">&nbsp<input type="button" id="filldetails"  VALUE ="Add Elements" onclick="add()">
        <input type="submit" id="filldetails" id="submit" value ="Get output" onclick="addFields()">

       
            <div id="container"/>
            <script>
           
            </script>
            <div class="center"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        <button id="submit" > add


</button>
    
</body>
                
<script>
function add(){
var number = document.getElementById("size").value;
alert(number);
var form =document.createElement("form");
form.setAttribute('method','POST');
form.setAttribute('action','');


var size=document.createElement("input")
size.type="text";
size.name="size";
size.id="size";
size.value=number;
size.appendChild(document.createTextNode("Enter no of elements"));
form.appendChild(size);



for (i=0,j=0;i<number,j<number;i++,j++){
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));

    form.appendChild(document.createTextNode(" Vlaue of i th Element -->> Array[" + (i+1) + "]"));
    var t1=document.createElement("input")
    t1.type="text";
    t1.name=1000 + j;
    t1.id="size" + i
    t1.setAttribute('value',i*i);


form.appendChild(t1);
   
}





var submit = document.createElement('input');
submit.type="submit";
submit.name="submit";
submit.value="submit";
submit.setAttribute('name','submit');
submit.setAttribute('value','submit');
form.appendChild(submit);
document.body.appendChild(form);
console.dir(submit);





}
            </script>       



    </div>

<div class="footer">this is footer</footer>

  <h3><b>Terms of Use  Privacy-Policy  Reschedule-Policy</b></h3>
  <h4>Copyright 2022-2032 by Team-A. All Rights Reserved</h4>
</div>

</body>
</html>


