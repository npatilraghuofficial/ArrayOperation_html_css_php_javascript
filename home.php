
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
  <link rel="stylesheet" href="home2.css"><?php
  echo"<font color=black><h1>welcome</font><font color=green> $_SESSION[uname]</font></h2>"; 
?>

</head>
<body>


<div class="topnav">
<div class="waviy">

   <a href="quiz.php">Take Quiz</a>
   <a href="aboutus.html" >About-Us</a>

   <a href="applications.html">Applications</a>
   <a href="deletion_page.php">Extraction</a>
   <a href="insertion.php">Insertion</a>
   <a href="home.php"  id="active">Home</a>

  

   <style>#active{
    background-color: #ddd;
    color: black;
  }</style>
     




   <span style="--i:1"><b>A</span>
   <span style="--i:2">R</span>
   <span style="--i:3">R</span>
   <span style="--i:4">A</span>
   <span style="--i:5">Y</span> &nbsp
   <span style="--i:6">O</span>
   <span style="--i:7">P</span>
   <span style="--i:8">E</span>
   <span style="--i:9">R</span>
   <span style="--i:10">A</span>
   <span style="--i:11">T</span>
   <span style="--i:12">I</span>
   <span style="--i:13">O</span>
   <span style="--i:14">N</span>
   <span style="--i:15">S</span></b>

  </div></div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>ARRAYS</h2>
      <div class="fakeimg" align="center">
      </div>
      <p style="margin-top:50px;" "font-family:Verdana,sans-serif;">&nbsp&nbsp&nbsp&nbsp&nbsp An array is a collection of items stored at contiguous memory locations. The idea is to store multiple items of the same type together. This makes it easier to calculate the position of each element by simply adding an offset to a base value, i.e., the memory location of the first element of the array (generally denoted by the name of the array). The base value is index 0 and the difference between the two indexes is the offset.<br>
 <br>
 

 For simplicity, we can think of an array as a fleet of stairs where on each step is placed a value (let’s say one of your friends). Here, you can identify the location of any of your friends by simply knowing the count of the step they are on. 
Remember: “Location of next index depends on the data type we use”.<br>
 <br> <b>Element</b> − Each item stored in an array is called an element.<br>
  <b>Index</b> − Each location of an element in an array has a numerical index, which is used to identify the element.</p>
    </div>
    <div class="card">
      <hr>
    <h2>Indexing in an Array</h2>
    <p>0 (zero-based indexing): The first element of the array is indexed by a subscript of 0.<br>
1 (one-based indexing): The first element of the array is indexed by the subscript of 1.<br>
n (n-based indexing): The base index of an array can be freely chosen. Usually, programming languages allowing n-based indexing also allow negative index values, and other scalar data types like enumerations, or characters may be used as an array index.<br>
</p>
</div>
<hr>

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
    <hr>
<div class="card">
  <h2>Array Declarations in C</h2>
  <p><b>Array declaration by specifying size</b><br><p>
       int arr1[10];
<br><p>// With recent C versions, we can also declare an array of user specified size<p>
int n = 10;<br>
int arr2[n];<br>
</p>
</p>
<hr>


<p><b><br>Array declaration by initializing elements</b><br><p>
int arr[] = { 10, 20, 30, 40 }
<br><p>// Compiler creates an array of size 4.
<br>// above is same as "int arr[4] = {10, 20, 30, 40}"
</p>
</p>
<hr>

<p><b><br>Array declaration by specifying size and initializing elements</b></p>
<br>int arr[6] = { 10, 20, 30, 40 }
<br><p>// Compiler creates an array of size 6, initializes first
<br>// 4 elements as specified by user and rest two elements as
<br>// 0. above is same as "int arr[] = {10, 20, 30, 40, 0, 0}"
</p>
</p>
<hr>


<p><b><br>Advantages of an Array in C</b><br><p>
<p>1.Random access of elements using array index.
<br>2.Use of fewer line of code as it creates a single array of multiple elements.
<br>3.Easy access to all the elements.
<br>4.Traversal through the array becomes easy using a single loop.
<br>5.Sorting becomes easy as it can be accomplished by writing fewer line of code.
</p>
</p>
</p>
<hr>


<p><b><br>Disadvantages of an Array in C</b><br><p>
<p>1.Allows a fixed number of elements to be entered which is decided at the time of declaration.
<br>2.Insertion and deletion of elements can be costly with the new memory allocation.
</p>
</p>
</p>
</div>
 </div>
</div>
<hr>


<div class="footer">
  <button class="button1"><a href="quiz.php">Take Quiz</button>
  <style>a{text-decoration: none;
    color:white;}</style>
    
  <button class="button2"><a href="insertion.php">Next</button>
   <style>a{text-decoration: none;
    color:white;}</style>
       

  <h4>  Copyright 2022-2032 by Team A - All Rights Reserved </h4>
  

</div>
</body>
</html>


