<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
$_SESSION['uname'];
$_SESSION['password'];
if(isset($_SESSION['uname'])){
$query ="SELECT * FROM register where email=.'$uname'. or phonenumber=.'$uname'.";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !== 0 )
{
    
  
         while($result = mysqli_fetch_assoc($data))
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
  <link rel="stylesheet" href="home.css">

</head>
<body>

<div class="topnav">

   <a href="register.html">Take Quiz</a>
   <a href="#">Applications</a>
   <a href="deletion_array.html">Extraction</a>
   <a href="insertion.html">Insertion</a>
   <a href="home.html"  id="active">Home</a>
   

   <style>#active{
    background-color: #ddd;
    color: black;
  }
  
  
.waviy {
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size:30px;
  margin-left:50px;
}
.waviy span {
  font-family: 'Alfa Slab One', cursive;
  position: relative;
  display: inline-block;
  color: #fff;
  text-transform: uppercase;
  animation: waviy 2s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateX(0)
  }
  20% {
    transform: translateX(-30px)
  }
}</style>


</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>ARRAYS</h2>
      <div class="fakeimg" align="center">
      </div>
      <p style="margin-top:50px;" "font-family:Verdana,sans-serif;">An array is a collection of items stored at contiguous memory locations. The idea is to store multiple items of the same type together. This makes it easier to calculate the position of each element by simply adding an offset to a base value, i.e., the memory location of the first element of the array (generally denoted by the name of the array). The base value is index 0 and the difference between the two indexes is the offset.<br>
 <br>
 For simplicity, we can think of an array as a fleet of stairs where on each step is placed a value (let’s say one of your friends). Here, you can identify the location of any of your friends by simply knowing the count of the step they are on. 
Remember: “Location of next index depends on the data type we use”.<br>
 <br> <b>Element</b> − Each item stored in an array is called an element.<br>
  <b>Index</b> − Each location of an element in an array has a numerical index, which is used to identify the element.</p>
    </div>
    <div class="card">
    <h2>Indexing in an Array</h2>
    <p>0 (zero-based indexing): The first element of the array is indexed by a subscript of 0.<br>
1 (one-based indexing): The first element of the array is indexed by the subscript of 1.<br>
n (n-based indexing): The base index of an array can be freely chosen. Usually, programming languages allowing n-based indexing also allow negative index values, and other scalar data types like enumerations, or characters may be used as an array index.<br>
</p>
</div>

    <div class="card">
      <h2>Array Operations</h2>
         We can perform the different operations on Arrays like
         <p><b>Insertion
         <br>  Deletion
         <br>  Updation
         <br> Traversal
         <br> Searching
         <br>Sorting
         </b><p>
    </div>
<div class="card">
  <h2>Array Declarations in C</h2>
  <br><br><br><br><br><br>

<div id="card">
  <div id="sidebar">
    <div id="title">Array declaration by initializing elements</div>
  </div>
  <div id="instructions"></div>
  <p><b>int arr[] = { 10, 20, 30, 40 }</b>
<br><p>// Compiler creates an array of size 4.
<br>// above is same as "int arr[4] = {10, 20, 30, 40}"
</p>
</p>

</div>
<div id="card">
  <div id="sidebar">
    <div id="title">Array declaration by initializing elements</div>
  </div>
  <div id="instructions"></div>
  <p><b>int arr[] = { 10, 20, 30, 40 }</b>
<br><p>// Compiler creates an array of size 4.
<br>// above is same as "int arr[4] = {10, 20, 30, 40}"
</p>
</p>
</div>

</div>
<div id="card1">
  <div id="sidebar">
    <div id="title">Array declaration by specifying size and Initializing elements</div>
  </div>
  <div id="instructions"></div>
  <p><b>int arr[4] = { 10, 20, 30, 40 }</b>
<br><p>// Compiler creates an array of size 4.
<br>// above is same as "int arr[4] = {10, 20, 30, 40}"
</div>
<h2>Advantages and Disadvantages</h2>
<p><b><br>Advantages of an Array in C</b><br><p>
<p>1.Random access of elements using array index.
<br>2.Use of fewer line of code as it creates a single array of multiple elements.
<br>3.Easy access to all the elements.
<br>4.Traversal through the array becomes easy using a single loop.
<br>5.Sorting becomes easy as it can be accomplished by writing fewer line of code.
</p>
</p>
</p>

<p><b><br>Disadvantages of an Array in C</b><br><p>
<p>1.Allows a fixed number of elements to be entered which is decided at the time of declaration.
<br>2.Insertion and deletion of elements can be costly with the new memory allocation.
</p>
</p>
</p>
</div>
 </div>
</div>


<div class="footer">
  <h3>Terms of Use  Privacy-Policy  Reschedule-Policy</h3>
  <button class="button1">Take Quiz</button>
   <button class="button2">Next</button>
  <h4>  Copyright 2022-2032 by Team A - All Rights Reserved </h4>

</div>
</body>
</html>


