<?php
include 'connect.php';

$UpdateEmail=$_GET['updateMember'];
$result=mysqli_query($con,"SELECT name,email,mobile,age,position FROM Members WHERE email='$UpdateEmail'");
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$age=$row['age'];
$position=$row['position'];

if(isset($_POST['update'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $age=$_POST['age'];
    $position=$_POST['position'];
    $sql="UPDATE Members SET name='$name',email='$email',mobile='$mobile',
    age='$age',position='$position' WHERE email='$UpdateEmail'";
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
                <label style="font-size:20px">Name</label><br/>
                <input type="text" class="from-control"
                 name="name"value="<?php echo $name;?>"/>
            </div>
            <div class="form-group">
                <label style="font-size:20px">email</label><br/>
                <input type="text" class="from-control"
                name="email"value="<?php echo $email;?>"/>
            </div>
            <div class="form-group">
                <label style="font-size:20px">Mobile</label><br/>
                <input type="text" class="from-control"
                name="mobile"value="<?php echo $mobile;?>"/>
            </div>
            <div class="form-group">
                <label style="font-size:20px">Age</label><br/>
                <input type="number" class="from-control"
                name="age"value="<?php echo $age;?>"/>
            </div>
            <div class="form-group">
                <label style="font-size:20px">Select a Position</label><br/>
                <select name="position" id="position">
                    <option><?php echo "$position";?></option>
                    <option>Goalkeeper</option>
                    <option>Defender</option>
                    <option>Midfielder</option>
                    <option>Striker</option>
                    <option>Not Player</option>
                </select>
            </div>
            <button type="submit"class="btn"name="update">
                Update
            </button>
        </form>

    </div>
</body>
</html>