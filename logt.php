
<!DOCTYPE html>
<style>
.err-msg{
      color:red;
    }
    </style>

<html>
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

        .note {color: 
#ff0000}
.success_msg{color:
#006600}
    </style> 
</head>
<font color="white" size="5"><b>
                <div id="MyClockDisplay" class="clock"></div>

                </b></font>
<body>



    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Login</button>

    <!-- The Modal -->
    <div id="login" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
           
    
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
                   
 
        // defining functions
            function validation2()
            {
                    var number = document.getElementById("uname").value;
                    if(number==""){
                        document.getElementById('unamespan').innerHTML = "<br>**Please Enter valid number from 1 t 10";
                        return false;
                    }
                    else
                    { document.getElementById('unamespan').innerHTML = "";

                       return true;
                    }
                    
                    if( (number.length <6 && number > 15))
                         {z
                            document.getElementById('unamespan').innerHTML="<br>** Please enter username between 6 to 15";
                            return false;
                         }else{
                                 add();
                        }
            z
                    }
                </script>
                .note {color: 
#ff0000}
.success_msg{color:

<form name="f1" action="" onsubmit="return validation2();" method="POST">
            <div class="container">
            <script>
            function validation()
            {
              var user=document.f1.username.value;
              var pass=document.f1.pass.value;
              sp="";
              if(user=="" || user.length<9)
              {
               alert("please input a valid username");
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
            } 
             </script>


            
                

            <h2>Login Form</h2>

            <h5>Login</h5>
 

  <div class="container">
    <label for="uname"><b>Username  &nbsp    <span class="error" id="unamespan"></span>

</label></b>   
    <input type="text" placeholder="Email/Phone-Number" name="username"  id="uname"  >

  <?php
 
?>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  id="pwd">
        
    <button type="button" name="submit" onclick="validation2()">Login</button>
    <label>
   
      <input type="checkbox" checked="checked" name="remember" id="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="#">Clear</button></a>
    <button type="button" class="cancelbtn_succes" ><a href="register.php">New User/Sign-In</button></a>

    <span class="psw"><a href="forgotpass.php">Forgot password?</a></span>
  </div>
</form>
      

                </div>

           
            
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


<style>
.error {color: #FF0000;}
</style>
<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();

//  echo $_SESSION['uname'];
//  date_default_timezone_set("Asia/Calcutta");




//  if(isset($_POST['username']))
 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["username"])) {
//     $nameErr = "*Username is required";
//   } else {
   
//     $name = test_input($_POST["username"]);
//     $nameErr = "";

//   }}

// {

//     if(empty($_POST['username']))
//     echo"empty";
//     $msg_name = "You must enter  your username";
//     $name_subject = $_POST['username'];
//     $name_pattern = '/^[a-zA-Z ]*$/';
//     preg_match($name_pattern, $name_subject, $name_matches);
//     if(!$name_matches[0])
//     $msg2_name = "Only alphabets space allowed";

//   $uname = $_POST['username'];
//   $password = $_POST['password'];
//    $datetime =  date('D, d M Y H:i:s');
//   echo $uname;

//   echo $datetime;

//    $sql = " SELECT * FROM register WHERE username='".$uname."' AND PASSWORD='".$password."' limit 1";
// // <-- AND INSERT INTO login VALUE('','$uname','','$datetime')"
    
  
//    $result = mysqli_query( $conn, $sql);
//    echo var_dump($result);
//     {
//       if(mysqli_num_rows($result)==1)

//            {
               
//           
//          header ( "refresh:0.1; url=home.php");
//                   $_SESSION['uname']=$uname;
//         exit();
                
//             }
           
//     }
// }
// ?>
</body>
<script>
function validation2()
            {
            
                    var number = document.getElementById("uname").value;
                    if(number==""){
                        document.getElementById('unamespan').innerHTML = "<br>**Please Enter valid username";
                        return false;
                    }
                    else
                    { document.getElementById('unamespan').innerHTML = "";
                      return true;

                    }
                    
                    if( (number.length <6 && number > 15))
                         {
                            document.getElementById('unamespan').innerHTML="<br>** username length must be in  between 6 to 15 ";
                            return false;
                         }else{
                          { document.getElementById('unamespan').innerHTML = "";
                            return true;

                                 
                        }
            
                    }
                </script>

</html>