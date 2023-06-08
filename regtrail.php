<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
ob_start();
date_default_timezone_set("Asia/Calcutta");



if(isset($_POST['submit']))

{

  $uname = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
 


 $datetime =  date('D, d M Y H:i:s');
  echo $uname;
  echo $datetime;

  $sql = "INSERT INTO register VALUE('','$uname','$email','$password','$phonenumber',' $datetime')";

    $result = mysqli_query( $conn, $sql);
    
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
              <script>alert("Please Validate...")</script>;
             <?php
        
               
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
    <head>
          <head></head>

    </head>

  <style>

body {
  font-family: Arial, Helvetica, sans-serif;
width:auto;
margin-left:10px;
margin-top:50px;
height:auto;
}
form {border: 3px solid #f1f1f1;width: 100%;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: greenyellow ;
}
.cancelbtn_succes{
  width: auto;
  padding: 10px 18px;
  background-color: greenyellow;
  text-decoration: none;
  color: white;
}


span.psw {
  float: right;
  padding-top: 16px;
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
</head>
<font color="white" size="5"><b>
                <div id="MyClockDisplay" class="clock"></div>

                </b></font>
<body>




    
           
    
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
  <center>
        <form  action="#" method="post" width="200px" enctype="multipart/form-data"  >
        <h2>Sign-up Form</h2>
        <hr>

      
 
    <label for="name"><b>Name</b></label>
   </div>

    <input type="text" placeholder="Enter Your Full Name" name="username" id="username"  autocomplete=off>
    <font color="red"><span id="spanuname"></span></font><br>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" autocomplete=off>
    <font color="red"><span id="sem"></span></font><br>

    


    <label for="email"><b>Phone-Number</b></label>
    <input type="text" placeholder="Enter Phone-Number" name="phonenumber" id="phonenumber"  autocomplete=off>
    <font color="red"><span id="sph"></span></font><br>
    <br>

    


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" autocomplete=off>
    <font color="red"><span id="spwd"></span></font><br>
    <br>


   <input type="hidden" placeholder=""  hidden name="psw-repeat" id="psw-repeat" autocomplete=off>
    <font color="red"><span id="scp"></span></font><br>
    <br>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        
        


            
                

            

   
   
    <button type="button" class="registerbtn"  onclick="val();" name="validate">validate</button>

    <button type="submit" class="registerbtn"  onclick="val();" name="submit">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.html">Login-Now</a>.</p>
  </div>
</form>
                  </center>

           



<script >
function val(){

    var uname = document.getElementById('username').value;
    var mail = document.getElementById('email').value;
    var ph = document.getElementById('phonenumber').value;
    var pass=document.getElementById('psw').value;
    var rpass=document.getElementById('psw-repeat').value;




    var correct_way=/^[A-Za-z]+$/;
    var correct_way2=/^[0-9A-Za-z]+$/;
    
   
    // var mn = document.getElementById('pn').value;
    // var email = document.getElementById('em').value;
    // var correct_way = /^[A-Za-z]+$/;
     //studentname
     if(uname == "") {
         document.getElementById('spanuname').innerHTML = "<br>**Please enter Username";

         return false;
        }
        else{
          var n2 = document.getElementById("username");

          n2.style.border="green solid 0.1px";
         document.getElementById('spanuname').innerHTML = "";
        
        }


        if((uname.length <= 5) || (uname.length > 15)){
         document.getElementById('spanuname').innerHTML = "<br>**Please Enter length between 5 TO 15 ";

         return false;
        }
        else{
         
         document.getElementById('spanuname').innerHTML = "";
         
      
        }
        if(uname.match(correct_way))
           true;
           else
           {
            document.getElementById('spanuname').innerHTML ="<br>**Invalid username";
            return false;
           }




           if(mail.indexOf("@gmail.com")<=2)
               {
                document.getElementById('sem').innerHTML = "Enter Valid EmailId";

               }
               var u = document.getElementById("email").value;
		        	 var u2 = document.getElementById("email");
               var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
               if (re.test(u)) {
                 u2.style.border="green solid 3px";
                 document.getElementById('sem').innerHTML = "";

			       	  
		         	}
		         	else {
				          u2.style.border = "red solid 3px";
			          	return false;
		           	}

         if(ph=="") {
  document.getElementById('sph').innerHTML = "<br>**please enter mobile number";
  return false;
   }

   if(isNaN(ph))
   {
      document.getElementById('sph').innerHTML ="<br>**please enter numbers only not alpha characters";
    return false;
  }
  if(ph.length < 10) 
    {
     document.getElementById('sph').innerHTML="<br>**name length is less than 10 digits ";
      return false;
}
if(ph.length = 10) 
 {
       document.getElementById('sph').innerHTML="<br>";
     
 }
 if(ph.length > 10) 
    {
     document.getElementById('sph').innerHTML="<br>**name length is greater than 10 digits ";
      return false;
}

if((ph.indexOf('9') !=0) && (ph.indexOf('8') !=0) && (ph.indexOf('7') !=0)) 
    {
     document.getElementById('sph').innerHTML="<br>**Mobile Number Must Start With 9/8/7";
      return false;
}else{
  document.getElementById('sph').innerHTML="<br>";

}


 if(pass=="" || pass.length<9)
              {
                document.getElementById('spwd').innerHTML ="<br>**Please enter valid Password";
                return false;
              }
             else{
              document.getElementById('spwd').innerHTML ="";
alert("Validation Succesfull...");
             }
           


  //                if (ph == "") 
  //   {
  //  document.getElementById('sph').innerHTML = "<br>**please enter mobile number";
  //  return false;
  //  }
   
  //  if(isNaN(mobilenum))
  //  {
  //      document.getElementById('sph').innerHTML ="<br>**please enter numbers only not alpha characters";
  //      return false;
  //  }
  //  if(mobilenum.length < 10) 
  //  {
  //      document.getElementById('sph').innerHTML="<br>**name length must be 10 digits number";
  //      return false;
  //  }
  //  if(mobilenum.length = 10) 
  //  {
  //      document.getElementById('sph').innerHTML="<br>";
     
  //  }



        
     }
     </script>


</body>

</html>