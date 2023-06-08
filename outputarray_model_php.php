

<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <script>
        $(document).ready(function(){
            $("#login").modal('show');
        });
    </script>

        
<link rel="stylesheet" type="text/css" href="dynamic_input.css">


<style>
    .div_shadow{
width: 125px;
height: 80px;
background-color:greenyellow;
animation-name: zero;
animation-duration: 4s;

border:groove;
float:left;
position:inherit;
font-size: 20px;
}

.childdiv{
width: 200;
height: 80px;
background-color:lightgoldenrodyellow;
animation-name: example;
animation-duration: 4s;
border:2px 2px 2px 2px;
border:groove;
float:right;
position:relative;
display:flex;
z-index: 1;
font-size: 60px;
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
                   
  </script>
<form action="" method="POST">
            <div class="container">
      


       
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


</body>

</html>