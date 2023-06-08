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
  <h1 style="text-align: center;font-size:50px;">Array Insertion</h1>
</div>

<div class="topnav">
   <a href="#">Application</a>
  <a href="#">Search</a>
  <a href="deletion_array.php">Extraction</a>
  <a href="#" active id="active">Insertion</a>
  <a href="home.php">Home</a>


   <style>#active{
    background-color: #ddd;
    color: black;
  }</style>



<a href="insertion_modal.html"> sample insertion Animation</a>
<style>

@keyframes size0_0{
    from{background-color: greenyellow;
    content-visibility: none}
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



    

</style>


<a href="loginmodal.php" style="float:left" >Take Quiz</a>
</div>
      
    <div class="card">
      <p id="para">
      <h2>Insertion in Linear Array-an element at the       beginning of the array:</h2>
            In this case we have to move all the elements one position backwards to make  a hole at the beginning of array. Though the insertion process is not difficult but freeing the first location for new element involves movement of all the existing elements. This is the worst case scenario in insertion in a linear array.

            In the below example, array elements from index 1 to index 8 have to moved one position backwards so that the new element 44 can be stored at index 1<br>

            <h2>Insertion in Linear Array-  at the end of the array:</h2>
            In this case we don’t have to move any elements since the action here will be just to append the element at the location after the last element.  This is the best case scenario.

            In the example array no elements are moved. The new element is stored in index 9.<br>


            <h2>Insertion in Linear Array- at the give position J:</h2>
            Let J be any location in the array ofone element already existing. We have to add  the new element at J position. To do this, starting from J, every element is moved one place backwards so that a hole is created at J and new element can be inserted here. This is the average case scenario.

            In the example array ,elements from index J (4) to index 8 have to moved one position backwards so that a new element can be stored at index J(4)<br><br>

    </p>
    <div style="text-align: center;">
    <img src="insertion_algorithm.png" class="center" style="width: 60%; height: auto;"></div>

    <div id="heading">ARRAY INSERTION</div><br><br>
       <div id="main">
        
       <div>
        Enter Number of Elements: (max. 10)<input id="size" name="size" type="text" /><button
				onclick="add()"
			>
				Enter - Elements
			</button>
			<div>
				<div id="inps"></div><br>
				<input type="submit" name="submit" onclick="addtolist()">Add Elements To Array</button>
			</div>
		</div>

       
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
			// declaring variables
			const size = document.getElementById("size");

			const inps = document.getElementById("inps");

            const main = document.getElementById("main");
            var form =document.createElement("form");
form.setAttribute('method','POST');

			let list = [];

			// defining functions
			function add() {
                var number = document.getElementById("size").value;
                var size=document.createElement("input")
size.type="text";
size.name="size";
size.id="size";
size.value=number;
size.appendChild(document.createTextNode("Enter no of elements"));
form.appendChild(size);


				for (let i = 0; i < size.value; i++) {
                    inps.append(document.createElement("br"));

                    const text = document.createTextNode(" Vlaue of Element -->> Array[" + (i+1) + "]")
					const li = document.createElement("input");
					li.name = 1000 + i;
                    li.id = "size"+i;

                    li.value = i*i;

                    inps.append(text);
                    inps.append(li);

					form.append(document.createElement("br"));
                    var submit = document.createElement('input');

                    form.appendChild(text);
                    form.appendChild(li);






				}
                var submit = document.createElement('input');
                

                submit.type="button";
                submit.value="ADD ELEMENTS TO ARRAY";
submit.name="add";
submit.setAttribute('onclick','addtolist()');

var dbsubmit = document.createElement('input');
submit.name="submit";


                dbsubmit.type="submit";
                dbsubmit.value="ADD ELEMENTS TO Database";
dbsubmit.name="submit";


main.appendChild(form);
form.appendChild(submit);

form.appendChild(dbsubmit);



			}
			function addtolist() {
               
				let inp = form.getElementsByTagName("input");
                
				for (let i of inp) {
					list.push(i.value);
                   

				}
				console.log(list);
			}
		</script>


    </div>



</body>
</html>


