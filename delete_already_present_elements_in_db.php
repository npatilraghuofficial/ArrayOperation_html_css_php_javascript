<?php
include("db_link_pesu.php");
error_reporting(0);
session_start();
 echo $_SESSION['uname'];
 
if($_SESSION(['username'])){
    echo "valid";
    echo  $_SESSION['uname'];
    $sql="TRUNCATE array_elements;";
    $data = mysqli_query($conn,$query);
    }
    if($data){
        echo"deleted";
        
    }
?>