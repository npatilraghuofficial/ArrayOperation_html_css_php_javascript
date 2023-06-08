<html>


<link href="indexforwho.css" rel="stylesheet">

<style>

@keyframes stretch {
  0% {
    transform: scale(.3);
    background-color: red;
    border-radius: 100%;
  }
  50% {
    background-color: orange;
  }
  100% {
    transform: scale(1.5);
    background-color: yellow;
  }
}


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
    animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: 1;
  animation-fill-mode: none;
  animation-play-state: running;
    
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
    display:inline;
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
</style>
<head>
</style>
   
<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
ob_start();
date_default_timezone_set("Asia/Calcutta");



if(isset($_POST['username']))

{

  $uname = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
 


 $datetime =  date('D, d M Y H:i:s');

  $sql = "INSERT INTO register VALUE('','$uname','$email','$password','$phonenumber',' $datetime')";

    $result = mysqli_query( $conn, $sql);
    {
        if($result)
           {
               
           ?> 
          <script>alert("you are succesfully registered")</script>;
          <?php
         header ( "refresh:1; url=quiz.php");
                  $_SESSION['uname']=$uname;
        exit();
                
            }
            else
            {
             ?> 
              <script>alert("INVALID CREDENTIALS LOGIN FAILED")</script>;
             <?php
             header ( "refresh:0; url=home.php");
               exit();
               
            }
    }
}
?>
<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $("#login").modal('show');
        });
    </script>

        
       


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dynamic_input.css">

  <style>


body {
  font-family: Arial, Helvetica, sans-serif;
width:auto;
margin-left:auto;
margin-top:5px;
height:auto;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
    <style>


        body {
            font-family: Arial, Helvetica, sans-serif;
        }
</style>
     


                </b></font>
<body>

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


    <div id="login" class="modal">

        <div class="modal-content">
            <span class="close"></span>
           
    
<form  method="POST" action="<?php  $_SERVER['PHP_SELF']?>">
      


            
        


   <h1><b>Track Record Page</b></h1>   



    <?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
$phonenumber= $_SESSION['phonenumber'];

$array = array();

$query ="SELECT * FROM who;";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !== 0 )
{
    
  ?><table border="dotted">
         


            
           
             <?php        
   while($result = mysqli_fetch_assoc($data))
             {
                $array[] = $row;
                 ?>
             <?php
                
                echo"
            <th>SL_No</th><td>".$result['SL_NO']."</td></tr>
             <tr>  <th>username</th> <td>".$result['username']."</td></tr>
             <tr> <th>size</th> <td>".$result['size']."</td></tr></tr>
             <tr><th>Timestamp</th> <td>".$result['last_insert_time']."</td></tr></tr>
             <tr>
             <tr><td><input type=text placeholder=l   readonly value=".$result['IndexNumber']." ></td></tr>
          
             <tr><td><input type=text placeholder=l   readonly value=".$result['address']." ></td></tr>
          
             <tr><td><input type=text placeholder=l   readonly value=".$result['value']." ></td></tr> </tr>
             <tbody>
            
             <tr>
             <td>SL_No</td>
             <td>  <th>username</th></td>
             <td> <th>size</th></td>
             <td><th>IndexNumber</th></td>
             <td><th>address</th></td>
             <td><th>value</th></td>
             <td><th>Timestamp</th></td>
             </tr>
            
          

             
       
        
   
  
   <tr><td><input type=text placeholder=  readonly value=".$result['SL_NO']." ></td></tr>

   <tr>  <td><input type=text placeholder=l   readonly value=".$result['username']." ></td></tr>

   <tr> <td><input type=text placeholder=l   readonly value=".$result['size']." ></td></tr>

   <tr><td><input type=text placeholder=l   readonly value=".$result['IndexNumber']." ></td></tr>

   <tr><td><input type=text placeholder=l   readonly value=".$result['address']." ></td></tr>

   <tr><td><input type=text placeholder=l   readonly value=".$result['value']." ></td></tr>

   <tr> <td><input type=textarea placeholder=l   readonly value=".$result['last_insert_time']." ></td></tr>
    </tbody>
    </tr>
</div>
<tr>
<div class=div_shadow id=one_1>

<sup>".$result['IndexNumber']." Position</sup><div class=array><span id=one_1_child style=opacity:0; >".$result['value']." </span>
</div>

</tr>
<span></span>

<h2>

  
</h2>


<td>  <div class=div_shadow><font color=black>Add-:</font>".$result['address']."
  <div class=div_shadow><font color=black>Index-</font>".$result['IndexNumber']."
<div class=childDiv>".$result['value']."</div></div></td>


</tr>


  
    
    


        
          
 

      
        </tr></tbody>";
        header( "refresh:20; url=");

    }?>
    <tr>
  
</div>
    </tr><?php
    

}
// print_r($array);

?>
</table>

</form>
      

           




</body>

</html>