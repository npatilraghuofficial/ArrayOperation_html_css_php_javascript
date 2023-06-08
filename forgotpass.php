<html>
  <head>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $("#login").modal('show');
        });
    </script>

        
  </head>
<body>
  
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Login</button>

    <!-- The Modal -->
    <div id="login" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
           

<title></title>
<meta charset="utf-8">

<form action="" method="POST">

<div class="container">
      


            
                


      <div class="container">
<h1><b>Forgot Password</b></h1>
<hr>
<label for="name"><b>Number/Email</b></label>
<input type="text" placeholder="Enter Your Number/Email" name="search" id="search" required>





<input type="submit" name="submit" align="center" class="btn btn-dark">
</div>


<div class="container signin">
<p>Already have an account? <a href="loginmodal.php">login</a>.</p>
</div>
</form>


          </div> 

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
</style>

<?php
include("db_link_pesu.php");
error_reporting(0);
$phonen= $_POST['search'];

session_start();

$query = "SELECT * FROM register where phonenumber='$phonen'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !== 0 )
{
    ?>    <?php
    if($_POST['submit']) 
    { 
         while($result = mysqli_fetch_assoc($data))
             {
                
                $pwd =$result['password'] ;
                $_SESSION['password']=$pwd;
               $_SESSION['password'];

                ?>
             <body>
             <?php
                
             echo"<tr>
             <table>
             <tr>           
        


  <label for=name><b>Your Password is </b></label>
<input type=text placeholder= name= id=output  value= ".$result['password']." readonly>

</tr>
      
      
        </tr>";
    }
    
    ?>
    <tr>
 
    </tr><?php
    }

}
else{
  echo" NO RECORD FOUND";
}
?>

</table>


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
<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
<script type="text/javascript">>
function checkdelete()
{ 
 confirm ("do you want to printthe application form");
}
function print(){
    window.print();
}
</script>