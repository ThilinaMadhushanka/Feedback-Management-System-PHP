<?php
$con=new mysqli('127.0.0.1','root','','Feedback_Management_System');

if($con){
   // echo"Connection successfull";
   
}
else{
    die(mysqli_error($con));
}
?>