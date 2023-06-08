<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
 echo $_SESSION['uname'];



if(isset($_POST['username']))

{

  $uname = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  echo $uname;

  $sql = "INSERT INTO register VALUE('','$username','$email','$password')";

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
             header ( "refresh:0; url=home.");
               exit();
               
            }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $("#login").modal('show');
        });
    </script>

        
       


    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

body {
  font-family: Arial, Helvetica, sans-serif;
width:500px;
margin-left:430px;
margin-top:50px;
height:180px;
}
form {border: 3px solid #f1f1f1;}


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

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
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

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style> 
</head>
<font color="white" size="5"><b>
                <div id="MyClockDisplay" class="clock"></div>

                </b></font>
<body>



    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Register</button>

    <!-- The Modal -->
    <div id="login" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
    
            <!-- <script type="text/javascript">
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
                   
  </script> -->
<form name="f1" action="" onsubmit="validate();" method="POST">
            <div class="container">
      


            
                

            <h2>Sign-up Form</h2>

            <div class="container">
    <h1><b>Signup here</b></h1>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Full Name" name="username" id="name" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="mail" id="email" required>
    


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.html">Login-Now</a>.</p>
  </div>
</form>
        </div>
        <script>
            function validate()
            {
              var user=document.f1.username.value;
              var pass=document.f1.password.value;
              var rep=document.f1.pswrepeat.value;
              var mail=document.f1.mail.value; 
              sp="";
              if(user=="" && user.length<9 )
              {
               alert("please input  username more then 8 letters");
              }
              if(user.match(/[0-9]/))
              {
                 alert("enter only alphabets");
              }
              if(pass=="" || pass.length<9)
              {
               alert("please input valid password");
              }
               for(i=0;i<user.length;i++)
               {
                 ch=user.charAt(i);
                 if(ch==' ')
                 sp=1;
               }
               if(sp==1)
               {
               alert("please input a username without space");
               }
               if(rep!=pass)
               {
                   alert("password does not match");
               }
               if(mail.indexOf("@gmail.com")<=2)
               {
                 alert("Invalid mail");
               }
               var u = document.getElementById("email").value;
		        	 var u2 = document.getElementById("email");
               var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
               if (re.test(u)) {
			       	  alert("done");
                 u2.style.border="green solid 3px";
			       	   return true;
		         	}
		         	else {
 z			          	return false;
		           	}
            } 
             </script>



                <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function () {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function () {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>


</body>

</html>