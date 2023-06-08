<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
ob_start();
 echo $_SESSION['uname'];

	
					if (!empty($_POST)){
								  					
					 	if(isset($_POST['submit'])){
								 		
										$sid =$_POST['sid'];
									    $ph = $_POST['ph'];
                                        $username= $_POST['username'];
										$password = $_POST['password'];

                                        
										
                                        $query = "UPDATE register SET username='$username', password='$password' WHERE email='$email' OR phonenumber='$phonenumber';
                                            SELECT studentdb.appno,studentdb.studentname,stulogin.id
                                            FROM studentdb,stulogin
                                            WHERE studentdb.appno=stulogin.id
                                            ORDER BY stulogin.id;
                                       ";
                                        $data = mysqli_multi_query($conn, $query);
                                        if($query){
								echo "<div class='alert alert-success text-center' role='alert'>FACULTY Registered Successfully NOW YOU CAN ACCESS DATABASE</div>";
												header( "refresh:0.2; url=stulogin.php" );
											}else{
								echo "<div class='alert alert-danger text-center' role='alert'>Error:login failed please contact DEVELOPER RAGHAVENDRA!</div>";
								header( "refresh:1; url=index.php" );
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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

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



    <button id="myBtn">Register</button>

    <div id="login" class="modal">

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
                   
  </script>
<form  method="POST" action="<?php  $_SERVER['PHP_SELF']?>">
            <div class="container">
      


            
                

            <h2>Sign-up Form</h2>

            <div class="container">
    <h1><b>Signup here</b></h1>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Full Name" name="username" id="username" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="name"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter phone number" name="phonenumber" id="phonenumber" required>
    


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
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
                    var modal = document.getElementById("myModal");

                    var btn = document.getElementById("myBtn");

                    var span = document.getElementsByClassName("close")[0];

                    btn.onclick = function () {
                        modal.style.display = "block";
                    }

                    span.onclick = function () {
                        modal.style.display = "none";
                    }

                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>


</body>

</html>