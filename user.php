<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $age=$_POST['age'];
    $position=$_POST['position'];
    $sql="INSERT INTO Members (name,email,mobile,age,position)
    VALUES('$name','$email','$mobile','$age','$position')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CSE_Football_Club</title>
    <link rel="stylesheet" href="CSS/style.css"">
</head>
<body>
    <div class="container">
    <form method="post">
            <div class="form-group">
                <label>Name</label><br/>
                <input type="text" placeholder="Enter Your Name" name="name"/>
            </div>
            <div class="form-group">
                <label>Email</label><br/>
                <input type="text" placeholder="Enter Your Email" name="email"/>
            </div>
            <div class="form-group">
                <label>Mobile</label><br/>
                <input type="text"placeholder="Enter Your Mobile" name="mobile"/>
            </div>
            <div class="form-group">
                <label>Age</label><br/>
                <input type="number"placeholder="Enter Your Age" name="age"/>
            </div>
            <div class="form-group">
                <label>Select a Position</label><br/>
                <select name="position" id="player-position">
                    <option>Goalkeeper</option>
                    <option>Defender</option>
                    <option>Midfielder</option>
                    <option>Striker</option>
                    <option>Not Player</option>
                </select>
            </div>
            <button type="submit"class="btn"name="submit">
                Submit
            </button>
        </form>

    </div>
</body>
</html>