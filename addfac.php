<script >
function val(){
    var fname = document.getElementById('fn').value;
    var mn = document.getElementById('pn').value;
    var email = document.getElementById('em').value;
    var correct_way = /^[A-Za-z]+$/;
     //studentname
     if (fname == "") {
         alert("**please fill name"); 

         

         return false;
    }
    if (!isNaN(fname)) {
         document.getElementById('fname').innerHTML = "<br>**please enter only string value";
        
         return false;
    } 
   
    if (fname.match(correct_way))
        true;
    else {
        document.getElementById('fname').innerHTML = "<br>**no special charecters";
        return false;
    }
    if ((fname.length <= 3) || (fname.length > 30)) {
        document.getElementById('fname').innerHTML = "<br>**name length must be between 2-30";
        return false;
}
if ((fname.length >= 2) || (fname.length < 30)) {
        document.getElementById('fname').innerHTML = "";
        
}


//mobile number//
if (mn == "") 
    {
   document.getElementById('mn').innerHTML = "<br>**please enter mobile number";
   return false;
   }
   
   if(isNaN(mn))
   {
       document.getElementById('mn').innerHTML ="<br>**please enter numbers only not alpha characters";
       return false;
   }
   if(mn.length < 10) 
   {
       document.getElementById('mn').innerHTML="<br>**name length must be 10 digits number";
       return false;
   }
   if(mn.length > 10) 
   {
       document.getElementById('mn').innerHTML="<br>**exeding 10 digits";
       return false;
   }
   if(mn.length = 10) 
   {
       document.getElementById('mn').innerHTML="";
       }
//email//
if (email == "") 
    {
    document.getElementById('ema').innerHTML = "<br>**please enter email";
    return false;
    }
    if(email.indexOf('@') <= 0)
    {
        document.getElementById('ema').innerHTML = "<br>**please enter valid email id followed by @";
    return false;
    }
   
    








}

</script>
<?php 
include("owndbu.php");
error_reporting(0);
?>

<body>
<style>
    *{
        background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}

</style>



<html>


    <title>ADD FACULTY</title>
    <HEAD>
        <H2><CENTER>ADD FACULTY PROFILE</CENTER><H2><BR>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
    </head>
    <style>
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        
        body{
       	font-family: 'Rubik', sans-serif;
        }
        .fa{
            width:800px;
            height:700px;
            border:groove;
           margin-left:35%;
        }
        .span{
            float:right;
            weight:2px;
            width:300px;
            height:20px;
        margin-top:2px;
        }
        </style>
    <BODY>

        <div class="fa">
        <form  action="#" method="post" width="200px" enctype="multipart/form-data" onsubmit="return val();">
       
        <div class="name">   
        <i class="fas fa-user"></i>  
        Faculty Name <input type="textbox" name="fname" id="fn" class="form-control">
        <div class="span"><font color="red" size="3"><span id="fname"></span></font></div>
       
      </div>

      <DIV CLASS="sex">
      <i class="fas fa-venus"></i>  
      SEX &nbsp <label class="radio-inline">
      <input type="radio" name="gen"  size="2" id="ln1" value="MALE" >MALE</label>
      <label class="radio-inline"><input type="radio" name="gen" size="2" id="ln2" value="FEMALE" >FEMALE</label><br>
      </div>
<br>

      <div class="pic">   
        <i class="fas fa-image"></i>  
        photo<input type="file" name="uploadfile" id="uploadfile" class="form-control"></br>
        <div class="span"><font color="red" size="3"><span id="fname"></span></font></div></div>
      
      <div class="date">   
        <i class="fas fa-calendar"></i>  
        DOB <input type="date" name="dob" id="dob" class="form-control"> </BR>
    </div>
  

    <div class="dept">   
        <i class="fas fa-building"></i>     

       
       DEPARTMENT <select name="dept" id="dept"> 
             <option >select....</option>;
            <option value="COMPUTER-SCIENCE">COMPUTER SCIENCE</option>
            <option value="LIFE-SCIENCE">LIFE SCIENCE</option>
            <option value="PHYSICAL-SCIENCE">PHYSICAL SCIENCE</option>
        </select>
       </br>
       <BR>

    </div>

    <div class="phonenumber">  <div class="span"><font color="red" size="3"><span id="mn"></span></font></div></div> 
        <i class="fas fa-phone"></i>  
        Phone Number<input type="textbox" name="phonen" id="pn" class="form-control" limit="10"></br>
        

   

    <div class="email">      <div class="span"><font color="red" size="3"><span id="ema"></span></font></div></div>
        <i class="fas fa-at"></i>  
       Email-Id</font><input type="textbox" name="email" id="em" class="form-control"></br>
     

    <div class="submit">    
        <i class="fas fa-go"></i>  
       <input type="submit"color="red" name="submit" id="submit" class="form-control"></br>
    </div>
     <div>
        </form>
      <?php

    

   date_default_timezone_set("Asia/Kolkatta");
       if($_POST['submit'])
    {    
         $fname=$_POST['fname'];
         $gen=$_POST['gen'];
            $dob=$_POST['dob'];
            $dept=$_POST['dept'];
            $phonen=$_POST['phonen'];
            $email=$_POST['email'];


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "faculty/".$filename;
move_uploaded_file($tempname, $folder);


$ct=time();

$ts=date('m-d-y g: i a',$ct);


echo $ts;

$query = "
INSERT INTO facultydb VALUES ('$id','$fname','$gen','$folder','$dob','$dept','$phonen','$email','$ts','','','','');
INSERT INTO facatt VALUES ('$id','$fname','','','$folder');
SELECT facultydb.id,facultydb.FacultyName,facultydb.Pic,facatt.id,facatt.Attendence,facatt.Pic
  FROM facultydb,facatt
  WHERE facatt.id=facultydb.id
  ORDER BY facatt.id;


";
$data = mysqli_multi_query($conn, $query);
if($data){
   ?><script> alert("FACULTY ADDED")
   
   window.location.assign("askadmin.php");
   </script>;
   <?php 
}else{
    ?><script> alert("FACULTY DETAILS ALREADY PRESENT")
     window.location.assign("askadmin.php");</script>;
    <?php
 
}

    }

 ?>
     </body>