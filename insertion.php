<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Calcutta");

$datetime =  date('D_d_M_Y_H:i:s');

 $size=$_POST['size'];
 $size=$_SESSION['size'];
 if(isset($_POST['submit']))
{
    if(empty($_POST['name']));
    {
    }
    $size=$_POST['size'];
    for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){
        $element = $_POST[1000+$y];
        $address = 1000+($y);
        $MyArray=array($address=>$element);
       
       
    }
    for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){

    }


    ?>
    <?php


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
    if(isset($_SESSION['uname'])){
        $query ="SELECT * FROM register";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if($total !== 0 )
        {
            
          
                 while($result = mysqli_fetch_assoc($data))
                     {
                      $username=$result['username'];
                      $password=$result['password'];
                      $phonenumber=$result['phonenumber'];
                      
                      $_SESSION['uname2']=$uname2;
                      $_SESSION['password']=$password;
        
                      $_SESSION['phonenumber']=$phonenumber;
                    }
                    }}
                    $uname2 =$_SESSION['username'];
                    $query="TRUNCATE array_elements";



                    $data = mysqli_query($conn, $query);

}
   if($data)
    {
       
        ?><?php
        for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){
            $size=$_POST['size'];
            $value=$_POST['100'.+$x];
            $address=1000+$x;
            $index_ = $x;
            $uname=$_SESSION['uname'];

        $query ="INSERT INTO array_elements VALUES ('','$uname','$','$size','$index_','$address','$value','$datetime')";
        $data = mysqli_query($conn, $query);
        }

       
        header ( "refresh:0.1; url=display_array_after_insertion.php" );

    
    }
    else{
        ?><?php
for ($x=0,$y=0;$x<$size,$y<$size;$x++,$y++){
    $size=$_POST['size'];
    $value=$_POST['100'.+$x];
    $address=1000+$x;
    $index_ =$x;
    $uname2=$_SESSION['uname2'];


    $query = "TRUNCATE array_elements";

    $data2 = mysqli_multi_query($conn, $query);

}

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
        #size0,#size1,#size2,#size3,#size4,#size5,#size6,#size7,#size8,#size9,#size10,#size11{

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
<a href="aboutus.html" >About-US</a>

   <a href="#">Applications</a>
  <a href="deletion_page.php">Extraction</a>
  <a href="#" active id="active">Insertion</a><span> </span>
  <a href="home.php">Home</a>



   <style>#active{
    background-color: #ddd;
    color: black;
  }</style>



<a href="insertion_modal.html"> sample insertion Animation</a>
<a href="quiz.php" style="float:left" >Take Quiz</a>

</div>
<a href="who.php" active id=""> view-all-insertions-by-users</a>
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
  
  #div1{
    font-size: 35px;
    display: flex;
   
    text-align: center;
  }
  .boxAnime{
    animation-name: anime;
    animation-duration: 1000ms;
    transition: 1s;
  }


    @keyframes anime {
    0%{transform: scale(0.1);
        background-color:red ;}
        100%{transform: scale(1);
            background-color:greenyellow;}
  }




    

</style>

<head>
  <><link rel="stylesheet" href="home.css"><?php
  echo"<h1><font color=green style=float:right><font color=black class=uname >welcome</font> $_SESSION[uname]</font><br></h2>"; 
?>

</head>


</div>
      
    <div class="card">
      <p id="para">
      <h2>&nbspInsertion in Linear Array-an element at the 1st position(0th Index) of the array:</h2>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we have to move all the elements one position backwards to make  a hole at the beginning of array. Though the insertion process is not difficult but freeing the first location for new element involves movement of all the existing elements. This is the worst case scenario in insertion in a linear array.<br>
            <br>
            <img src="insertion1.png" width="50%" height="auto">
            <img src="insertion2.png" width="50%" height="auto" style="float:right;">
            <br>
            <p style="text-align:center"><img src="insertion3.png" width="50%" height="auto"></p>
            <br>
            <h2>Insertion in Linear Array-  at the location after the last element of the array:</h2>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIn this case we don’t have to move any elements since the action here will be just to append the element at the location after the last element.  This is the best case scenario.

            <br>
            <img src="insertion4.png" width="50%" height="auto">
            <img src="insertion5.png" width="50%" height="auto" style="float:right;">
            
<br><br>
            <h2>Insertion in Linear Array- at the give position i:</h2>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLet i be any location in the array of one element already existing. We have to add  the new element at i position. To do this, starting from i, every element is moved one place backwards so that a hole is created at i and new element can be inserted here. This is the average case scenario.<br>
            <br>
            <img src="insertion6.png" width="50%" height="auto">
            <img src="insertion7.png" width="50%" height="auto" style="float:right;">
            <br>
            <p style="text-align:center"><img src="insertion8.png" width="50%" height="auto"></p>
            <br>
    </p>
    <div style="text-align: center;">
    <br><br>
    <p><h2>To view the algorithm of insertion place your mouse over the text below</h2></p>
    <div class="image" style="text-align: center; font-size: 20px; width: 100%;">
        <p>
              <span class="hiddentxt"><a href="insertion_algorithm.png">ALGORITHM OF INSERTION</a></span><span class="hiddenimg"><img src="insertion_algorithm.png" width="60%" height="auto" /></span>
            </p></div><br>
    <div id="heading">ARRAY INSERTION</div><br><br>
   
                  <div id="main">
        
       <div>
        Enter Number of Elements: (max. 10)<input id="size" name="size" type="text" />
        <a href="#form" >
            <br><button onclick="validation()"
			>
				Enter - Elements
			</button></a><br>   <span id="sizespan" font="red"> </span>
			
		</div>
      
				<input type="hidden" id="inps">
		
       
            <div id="container"/>
            <script>
           
            </script>
            <div class="center"> 
         


</button>
    
</body>
<script>
			// declaring variables
			const size = document.getElementById("size");

			const inps = document.getElementById("inps");

            const main = document.getElementById("main");
            var form =document.createElement("form");
form.setAttribute('method','POST');
form.setAttribute('id','form');

			let list = [];

			// defining functions
            function validation()
            {
                    var number = document.getElementById("size").value;
                    if(number==""){
                        document.getElementById('sizespan').innerHTML = "<br>**Please Enter valid number from 1 to 10";
                        return false;
                    }
                    else
                    { document.getElementById('sizespan').innerHTML = "";

                        add();
                    }
                    
                    if( (number.length > 2 || number > 10))
                         {
                            document.getElementById('sizespan').innerHTML="<br>** Please enter size between 1 to 10 ";
                            return false;
                         }else{
                                 add();
                        }
            

               
			function add() {
              
                

                }
                var number = document.getElementById("size").value;
                var size=document.createElement("input")
size.type="hidden";
size.name="size";
size.id="size";
size.value=number;
size.appendChild(document.createTextNode("Enter no of elements"));
form.appendChild(size);


				for (let i = 0; i <size.value; i++) {
                    inps.append(document.createElement("br"));
                    j=4;
                    const text = document.createTextNode(" Value of Element -->> Array[" + (i+1) + "]")
					const li = document.createElement("input");
					const span = document.createElement("span");
					li.name = 1000 + i;
                    li.id = "size"+i;

                    li.value = i+number;

                    inps.append(text);
                    inps.append(li);
                    span.setAttribute('value',i);
                    span.setAttribute('id',"span"+i);
                    li.setAttribute('required',"");


                    span.setAttribute('font','red');
                    
                   


					form.append(document.createElement("br"));

                    form.appendChild(text);
                    form.appendChild(li);
                    form.appendChild(span)
                    





				}
                var submit = document.createElement('input');
                

                submit.type="button";
                submit.value="ADD ELEMENTS TO ARRAY";
submit.name="add";
submit.setAttribute('onclick','addtolist()');

var dbsubmit = document.createElement('input');
submit.name="submitt";


                dbsubmit.type="submit";
                dbsubmit.value="ADD ELEMENTS TO Database";
dbsubmit.name="submit";


const text2 = document.createTextNode("Inserted array elements will display below");

var boxdiv = document.createElement('div');
boxdiv.setAttribute('id','div1');
boxdiv.append(document.createElement("br"));


form.append(document.createElement("br"));



main.appendChild(form);
form.appendChild(submit);

form.appendChild(dbsubmit);
form.append(document.createElement("br"));

form.append(document.createElement("br"));

form.append(document.createElement("br"));

form.appendChild(text2);
form.appendChild(boxdiv);



			}
			function addtolist() {
               
				let inp = form.getElementsByTagName("input");
                
				for (let i of inp) {
					list.push(i.value);
                   

				}
                console.log(list);
                list.shift();
                list.pop();
                list.pop();
                console.log(list);

				document.getElementById("div1").innerHTML=("<div class='boxedItem'>"+list.join("</div><br><div class='boxedItem'>")+"</div>");
            var x = Array(...document.getElementsByClassName("boxedItem"))
            x.forEach((e)=>e.className+=" boxAnime");
			}

		</script>


    </div>


</body>




</script>

</html>


