<?php
    include 'connect.php';
    if(isset($_GET['deleteMember'])){
        //echo "Hilll2222l";
        $email=$_GET['deleteMember'];
        echo $email;
        $sql="DELETE FROM Members WHERE email='$email'";
        $result=mysqli_query($con,$sql);
        echo "Deletetttttttt";
        if($result){
            header('location:index.php');
        }else{
            die(mysqli_error($con));
        }
    }

?>