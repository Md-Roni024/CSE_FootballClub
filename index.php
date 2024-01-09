<?php
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<head>
	<title>CSE_Football_Club</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<h1 style="text-align:center;">CSE Football Club</h1>
	<div class="container">
        <?php
            $connection=mysqli_connect('localhost','root','','CSE_Football_Club');
                if(isset($_POST['search'])){
                    $searchKey=$_POST['search'];
                    $sql= "SELECT * FROM Members WHERE name LIKE '%".$searchKey."%'";
                }else{
                    $sql="SELECT * FROM Members";
                    $searchKey="";
                }
                $result = mysqli_query($connection,$sql);
        ?>
		<form action="" method="POST"> 
		<div>
                	<button class="btn"><a style="color:white"href="user.php">Add Member</a></button>
			<input type="text" id="searchBtn"name="search" placeholder="Search By Name" value="<?php echo $searchKey;?>" > 
			<button id="btn3"name="searchBtn">Search</button>
		</div>
		</form>
		<table id="playerTable">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Opeartions</th>
                    </tr>
                    <?php
                        while($row=mysqli_fetch_assoc($result)){
                            $noldxame=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];
                            $age=$row['age'];
                            $position=$row['position'];
                            
                            echo '<tr>
                            <td>'.$noldxame.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$age.'</td>
                            <td>'.$position.'</td>
                            <td>
                            <button class="btn">
                            <a style="color:white"href="update.php? updateMember='.$email.'">Update</a></button>
                         
                            <button id="btn4">
                            <a style="color:white"href="delete.php? deleteMember='.$email.'">Delete</a></button>
                            </button>
                          </td>
                            </tr>';
                        }
                    ?>
			</table>
	</div>
</body>
</html>
