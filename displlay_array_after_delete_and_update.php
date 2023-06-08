<html>
    <head</head>
    <body>

    <html !DOCTYPE>
    <head>
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


<div class="header">
  <h1 style="text-align: center;">Array Insertion</h1>
</div>

<div class="topnav">
   <a href="#">Application</a>
  <a href="deletion_array.php">Extraction</a>
  <a href="#" active id="active">Insertion</a>
  <a href="home.php">Home</a>
  <a href="aboutus.html">About-US</a>



 
  <style>#active{
    background-color: #ddd;
    color: black;
  }</style>

  <a href="loginmodal.php" style="float:left" >Take Quiz</a>

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

<br>
</div><br>

<font style="font-size: 35px;">Array Elements are</font>

   
</html><?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
$phonenumber= $_SESSION['phonenumber'];
echo $_SESSION['phonenumber'];

$array = array();

$query ="SELECT * FROM array_elements";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !== 0 )
{
    
  
         while($result = mysqli_fetch_assoc($data))
             {
                $array[] = $row;
                 ?>
             <body><div class="profile">
             <?php
                
             echo"
            <tr>
            
        <td><input type=text hidden  value=".$result['size']." 

        
          <td>  <div class=div_shadow><font color=black>Add-:</font>".$result['address']."
          <td>  <div class=div_shadow><font color=black>Index-</font>".$result['IndexNumber']."
         <div class=childDiv>".$result['value']."</div></div></td>
          
 

      
        </tr>";
    }?>
    <tr>
  
</div>
    </tr><?php
    

}
// print_r($array);
?>
</table>
</body>


        <link rel="stylesheet" type="text/css" href="dynamic_input.css">


    <style>
        .div_shadow{
    width: 180px;
    padding:30px;
    height: 100px;
    background-color:greenyellow;
    animation-name: zero;
    animation-duration: 4s;
   
    border:groove;
    float:left;
    position:inherit;
    font-size: 20px;
    position: relative;
    box-shadow: 10,10,10,black;
    margin-right: 20px;
    z-index: inherit;
    
  }
  
  .childdiv{
    width: 180px;
    height: 65px;
    background-color:lightgoldenrodyellow;
    animation-name: example;
    animation-duration: 4s;
    border:2px 2px 2px 2px;
    border:groove;
    float:right;
    position:relative;
    display:flex;
    z-index: 1;
    font-size: 50px;
    border-radius: 2px;
  }


  .indexnum{
    width: 100px;
    height: 40px;
    background-color:lightgoldenrodyellow;
    animation-name: example;
    animation-duration: 4s;
    border:2px 2px 2px 2px;
    border:groove;
    float:right;
    position:relative;
    display:flex;
    z-index: 2;
    font-size: 40px;
    border-radius: 2px;
  }
}
    /* box parent */
@keyframes zero{
    from{background-color: orange;
    content-visibility: }
    to{background-color:antiquewhite;
        border-color: blueviolet ;
        border-radius: 2px;
        box-shadow: 2px;
    content:30px;
opacity:1}
    
}
@keyframes childdiv{
    from{background-color: lightgoldenrodyellow;
    content-visibility: none;}
    to{
    content:30px;
    animation-delay:2.5s;

opacity:1}
    
}
        .container{
            height:auto;
            margin-left: 20%;
        }
    </style>
    
        </script>


  <body>
      
    
    
    </body> 
    </html>
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


</body>
</html>



    