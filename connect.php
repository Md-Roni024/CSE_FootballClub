<?php
    $con=new mysqli('localhost','root','','CSE_Football_Club');
    if(!$con){
        die(mysqli_error($con));
    }  
?>