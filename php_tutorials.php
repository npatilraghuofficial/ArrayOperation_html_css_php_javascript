<script type="text/javascript">
var width=500;
</script>
<?php


 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>";

 $num = array(4,6,5,2,11);
 sort($num);
 $arr =count($num);
 for ($x = 0;$x<$arr;$x++){
      echo "br";
      $num[$x];
      echo "br";
 }

     echo $myPhpVar= "<script>document.writeln(width);</script>";

$x = 75;
$y = 25;
function add(){
     $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $z;

     echo date("y/m/d");echo"<br>";
     echo date("y-m-d");echo"<br>";
     echo date("y.m.d");echo"<br>";
     echo date('l');
     $name ="raghu";
     echo $name;     echo"<br>";
     
     echo"<br>";
     $name ="we are $name";
     echo $name;
     
     $student=array();echo"<br>";
     $student[0]="david";

     $student[1]="david";

     $student[2]="aa";

     $student[3]="b";

     $student[4]="c";

     foreach($student as $std_arr)
     {
          echo $std_arr."\n";
     }




     $filename = "php.txt";
     if(file_exists($filename));
     {
          echo "file found";
          echo "<br>";
     }
     $file =fopen($filename,"r");
     if($file == False){
          echo"error";
          exit();
     }
     else{echo "file opened";}
     $filesize = filesize($filename);
     echo "<br>";
     $filetext = fread($file,$filesize);

     $file =fopen($filename,"W");
     $newdata = "im new data";
     file_put_contents($filename,$newdata);
     echo "<br>";
     echo $filetext;
     
     fclose($file);

     echo $filesize;
     echo "<br>";
     






     echo "<br>";

    


?>
     <html>
<input type="text" id="inputbox" names="arrvalue">

<input type="text" id="inputbox" names="arrvalue">

<input type="text" id="inputbox" names="arrvalue">
<br/>
<button type="button" id="submit">Submit</button>
<button type="button" id="display">Display</button>
<br/>
<div id="screen"></div>

JS:
<script>

var inputArray = [];
var input = document.getElementsByName('arrvalue');
var screen = document.getElementById('screen');

document.getElementById('submit').onclick = function () {
    inputArray.push(input.value);
    screen.innerHTML = input.value;
};
document.getElementById('display').onclick = function () {
    screen.innerHTML = inputArray
};

</script>