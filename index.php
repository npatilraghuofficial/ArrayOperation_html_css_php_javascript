<head>
    <div class="logo">
        <img src="peslogo.png" width="100%" >
        </div>
      <link rel="stylesheet" type="text/css" href="style1.css">
      
        
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    
   
    
#myProgress {
  width: 50%;
  background-color: #ddd;
  margin:auto;
}
*
{
  margin:0;
  padding:5px;
}

}
     
     background-color: #4CAF50;
    
     height: 2rem;
     background: transparent;
     width: 6rem;
     border-style: solid;
     border-width: 0px;

    button{
      border-radius: 15px;
      width: 6rem;
      border-style: solid;
      border-width: 0px;
    }
#myBar {
  width: 1%;
  height: 25px;
  background-color: black;
  color:white;
  text-align:center;
  }
</style>
<center><h1 class="class='alert alert-success text-center'"><b >WELCOME TO ARRAY OPERATIONS PROJECT</h1></b></center>
</head>
<div id="myProgress">
  <div id="myBar">
  <span id="value" >0%</span>
</div>
</div>

<br>
 <button style="margin-left: 5px;background-color: GREEN;" type="submit" name="submit" class="btn btn-primary" onclick="move()">GET STARTED</button>

<script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 25);
   function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
        
        window.location.assign("smoke_array.php");
       } else {
        width++;
        elem.style.width = width + "%";
        document.getElementById("value").innerHTML=width + "%";
      }
    }
  }
}
</script>
<b><div> <u>DEVELOPED BY </u><br><div></div>Raghavendra N Patil<BR>Damodar Kamat<br>Subramanya Belavadi<br>Rohit<div ></b>



        
        

							</div>
						</div>
						<h5></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>